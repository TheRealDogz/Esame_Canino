<template>
  <div class="flex flex-col items-center p-10">
       <div class="flex flex-col h-full w-1/4 space-y-7">
            <div class="w-full flex flex-col">
                <label for="comune" class="mb-2">Comune</label>
                <input id="comune" class="rounded px-3 w-full py-1 outline-none border-2 px-2 rounded-lg py-1" type="text" placeholder="comune" v-model="land.comune">
            </div>
                
            <div class="w-full flex flex-col">
                <label for="foto" class="mb-2 mt-3">Foto</label>
                <input id="foto" class="rounded px-3 w-full py-1 outline-none border-2 px-2 rounded-lg py-1" type="text" placeholder="foto" v-model="land.foto">
            </div>

            <div class="w-full flex flex-col">
                <label for="foglio" class="mb-2 mt-3">Foglio</label>
                <input id="foglio" class="rounded px-3 w-full py-1 outline-none border-2 px-2 rounded-lg py-1" type="string" placeholder="foglio" v-model="land.foglio">
            </div>

            <div class="w-full flex flex-col">
                <label for="mappale" class="mb-2 mt-3">Mappale</label>
                <input id="mappale" class="rounded px-3 w-full pt-1 py-1 outline-none border-2 px-2 rounded-lg py-1" type="string" name="mappale" placeholder="mappale" v-model="land.mappale">
            </div>
            
            <div class="w-full flex flex-col">
                <label for="parcella" class="mb-2">Parcella</label>
                <input id="parcella" class="rounded px-3 w-full pt-1 py-1 outline-none border-2 px-2 rounded-lg py-1" type="string" name="parcella" placeholder="parcella" v-model="land.parcella">
            </div>

            <div class="w-full flex flex-col">
                <label for="terreno" class="mb-2">Terreno</label>
                <select name="" id="terreno" class="outline-none border-2 px-2 rounded-lg py-1 bg-white" v-model="land.terreno">
                    <option value="argilloso">Argilloso</option>
                    <option value="sabbioso">Sabbioso</option>
                    <option value="ghiaioso">Ghiaioso</option>
                    <option value="tufo">Tufo</option>
                </select> 
            </div>

            <div class="w-full flex flex-col">
                <label for="irrigazione" class="mb-2">irrigazione</label>
                <select name="" id="irrigazione" class="outline-none border-2 px-2 rounded-lg py-1 bg-white" v-model="land.irrigazione">
                    <option value="scorrimento">Scorrimento</option>
                    <option value="pozzo">Pozzo</option>
                    <option value="canale">Canale</option>
                    <option value="senza">Senza</option>
                </select> 
            </div>

            <div class="w-full flex flex-col">
                <label for="offerta" class="mb-2">offerta</label>
                <select name="" id="offerta" class="outline-none border-2 px-2 rounded-lg py-1 bg-white" v-model="land.offerta">
                    <option value="vendita">Vendita</option>
                    <option value="affitto">Affitto</option>
                    <option value="affido">Affido</option>
                </select> 
            </div>
             
             <div class="w-full flex flex-col">
                <label for="canone" class="mb-2">Canone</label>
                <input id="canone" class="rounded px-3 w-full pt-1 py-1 outline-none border-2 px-2 rounded-lg py-1" type="string" name="canone" placeholder="canone" v-model="land.canone">
            </div>
            
        </div>
        <div class="flex flex-col">
            <button class="bg-green-400 px-4 py-2 rounded-lg text-white hover:bg-green-600 mt-7" @click="addLand()">Crea</button>
        </div>
        {{ isEdit}}
    </div>
</template>

<script>
import axios from 'axios'

export default {
    name: "addLand",
    data(){
        return{
            land: {},
            isEdit: false
        }
    },
    async mounted() {
        if(this.$route.name == 'edit'){
            this.isEdit = true
        }

        if(this.isEdit){
            this.land = (await axios.get('http://localhost:8000/api/lands/' + this.$route.params.id)).data
        }
    },
    methods: {
        async addLand() {
            if(!this.isEdit){
                await axios.post("http://localhost:8000/api/lands", this.land)   
                    this.$router.push({
                    name: 'home'
            })
            
            }
            else {
                await axios.put("http://localhost:8000/api/lands/" + this.$route.params.id, this.land)
                this.$router.push({
                    name: 'home'
                })
            }
        }
    }
}

</script>
