<template>
  <div>
    <div v-bind:key="car.id" v-for="car in cars">
      <CarItem v-bind:car="car" v-on:del-car="$emit('del-todo', car.id)" />
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
  props: ["cars"]
}
</script>

<style scoped>

</style>

