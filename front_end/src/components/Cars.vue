<template>
  <div>
    <div v-bind:key="car.id" v-for="car in cars">
      <CarItem v-bind:car="car" v-on:del-car="$emit('del-car', car.id)"
      v-on:edit-car="$emit('edit-car', car.id)" />
    </div>
  </div>
</template>

<script>
import CarItem from './CarItem.vue';

export default {
  name: "Cars",
  components: {
    CarItem
  },
  props: ["cars"], 
  methods: {
    editCar(id) {
      axios.put(`https://jsonplaceholder.typicode.com/davidsouza20/api/cars/${id}`)
        .then(res => this.cars = this.cars.filter(car => car.id !== id))
        .catch(err => console.log(err));
    }
  }
  
}
</script>

<style scoped>

</style>

