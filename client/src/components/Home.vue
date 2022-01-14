<template>
  <div class="flex flex-row p-10 h-full h-screen">
      <div class="grid grid-cols-4 gap-10 w-screen">
        <div class="flex flex-col w-60 h-auto bg-green-500" v-for="land in lands" :key="land.id" >
          <div @click="goToView(land)">
            <div class="flex flex-row bg-green-500 p-2"><p>{{land.comune}}</p></div>
            <br>
            <div class="flex flex-row bg-green-500 p-2"> <img :src="land.foto" alt=""> </div>
            <br>
            <div class="flex flex-row bg-green-500 p-2"><p>{{land.dimensione}}</p></div>
            <br>
            <div class="flex flex-row bg-green-500 p-2"><p>{{land.foglio}}</p></div>
            <br>
            <div class="flex flex-row bg-green-500 p-2"><p>{{land.mappale}}</p></div>
            <br>
            <div class="flex flex-row bg-green-500 p-2"><p>{{land.parcella}}</p></div>
            <br>
            <div class="flex flex-row bg-green-500 p-2"><p>{{land.terreno}}</p></div>
            <br>
            <div class="flex flex-row bg-green-500 p-2"><p>{{land.irrigazione}}</p></div>
            <br>
            <div class="flex flex-row bg-green-500 p-2"><p>{{land.offerta}}</p></div>
            <br>
            <div class="flex flex-row bg-green-500 p-2"><p>{{land.canone}}</p></div>
            <br>
            <div class="flex flex-row bg-green-500 p-2"><p>{{land.disponibile}}</p></div>
            <br>
          </div>
          <button class="border-2 px-4 rounded-full border-blue-400" @click="goToEdit(land.id)">
            Edit
          </button>
        </div>
      </div>
  </div>
</template>

<script>
import axios from 'axios'

export default {
    name: 'Home',

    data(){
      return{    
          lands: [],
      }
    },

    async mounted(){  
      this.lands = (await axios.get('http://127.0.0.1:8000/api/lands')).data
    },
    methods: {
        goToView(land) {
          this.$router.push({
            name: "detail",
            params: {
              id:land.id
            }
          })
        },
        goToEdit(id) {
          this.$router.push('/edit/' + id)
        }
    }
}
</script>
