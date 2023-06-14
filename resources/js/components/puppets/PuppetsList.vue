<template>
  <div>
    <Loader v-if="!puppets.length" />
    <ul v-else-if="puppets.length">
      <!-- Se sono presenti stampi titoli -->
      <li v-for="elem in puppets" :key="elem.id">{{ elem.title }}</li>
    </ul>
    <p v-else>Non ci sono post nel DB</p>
    <!-- Altrimenti stampi <p>...</p> -->
  </div>
</template>
    <script>
import Loader from "../Loader.vue";
export default {
  name: "PuppetsList",
  props: ["puppets"],
  components: {
    Loader,
  },
};
</script>

