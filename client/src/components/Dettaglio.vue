<template>
  <div>
      {{land.foglio}}
  </div>
</template>

<script>
import axios from 'axios';
export default {
    name: "dettaglio",
    data() {
        return{
            land: {}
        }
    },
    async mounted() {
        let LandId = this.$route.params.id;
        let response = await axios.get('http://127.0.0.1:8000/api/lands/' + landId);
        this.land = response.data;
    }
}
</script>

<style>

</style>