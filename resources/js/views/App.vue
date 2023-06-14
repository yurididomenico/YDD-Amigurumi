<template>
  <div>
    <!-- <h1>Work in progress</h1> -->
    <WorkInProgress />
    <!-- Dati Puppets -->
    <PuppetsList :puppets="puppets" />
  </div>
</template>
<script>
import WorkInProgress from "../components/WorkInProgress.vue";
import PuppetsList from "../components/puppets/PuppetsList.vue";
export default {
  name: "App",
  components: {
    WorkInProgress,
    PuppetsList,
  },
  mounted() {
    this.getPuppets();
  },
  data() {
    return {
      puppets: [],
    };
  },
  methods: {
    getPuppets() {
      axios.get("http://localhost:8000/api/puppets").then((res) => {
        console.log(res.data);
        this.puppets = res.data;
      });
    },
  },
};
</script>
