<template>
  <div id="app">
    <AddCar v-on:add-car="addCar" />
  <Cars v-bind:cars="cars" v-on:del-car="deleteCar" />
  </div>
</template>

<script>
import Cars from '../components/Cars';
import AddCar from '../components/AddCar';
import axios from 'axios';

export default {
  name: 'Home',
  components: {
    Cars,
    AddCar
  },
  data() {
    return {
      cars: [],
    }
  },

  //Ajax calls to the API
  methods: {
    //Delete a Car 
    deleteCar(id) {
      axios.delete(`https://jsonplaceholder.typicode.com/todos/${id}`)
        .then(res => this.cars = this.cars.filter(car => car.id !== id))
        .catch(err => console.log(err));
    },
    //Add a Car 
    addCar(newCar) {
      //newCar.id = this.cars.length +1
      const car = newCar;
      axios.post('https://my-json-server.typicode.com/davidsouza20/api/cars', {car})
        .then(res => this.cars = [...this.cars, res.data])
        .catch(err => console.log(err));
    },

    //Update a car 
    updateCar() {
      

    }
  },

  //Display the list of Cars 
  created() {
    //get the cars 
    axios.get('http://localhost:8000/carros')
      .then(res => this.cars = res.data)
      .catch(err => console.log(err));
  }

}
</script>

<style>
  * {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
  }

  body {
    font-family: Arial, Helvetica, sans-serif;
    line-height: 1.4;
  }

  .btn {
    display: inline-block;
    border: none;
    background: #555;
    color: #fff;
    padding: 7px 20px;
    cursor: pointer;
  }

  .btn:hover {
    background: #666;
  }
</style>
