<template>
    <div class="flex flex-row p-10 h-full h-screen">
        <div class="flex flex-col w-60 w-full h-auto bg-green-500 text-center">
            <div>
              {{land.comune}}
            </div>
            <div class="flex item-center"><img :src="land.foto" alt=""></div>
            <div>{{land.dimensione}}</div>
            <div>{{land.foglio}}</div>
            <div>{{land.mappale}}</div>
            <div>{{land.parcella}}</div>
            <div>{{land.terreno}}</div>
            <div>{{land.irrigazione}}</div>
            <div>{{land.offerta}}</div>
            <div>{{land.canone}}</div>
            <div>{{land.disponibile}}</div>
        </div>
      
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
        let response = await axios.get('http://127.0.0.1:8000/api/lands/' + LandId);
        this.land = response.data;
    }
}
</script>

<style>

</style>