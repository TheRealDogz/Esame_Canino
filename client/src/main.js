import Vue from 'vue'
import App from './App.vue'
import VueRouter from 'vue-router'

import Home from '@/components/Home.vue'
import Addland from '@/components/Addland.vue'
import Edit from '@/components/Edit.vue'
import Dettaglio from '@/components/Dettaglio.vue'

Vue.use(VueRouter)

Vue.config.productionTip = false

const routes = [
  {
    path: '',
    redirect: '/home'
  },
  {
    path: '/home',
    name: 'home',
    component: Home
  },
  {
    path: '/create',
    name: 'addland',
    component: Addland
  },
  {
    path: '/edit/id',
    name: 'edit',
    component: Edit
  },
  {
    path: '/detail/id',
    name: 'detail',
    component: Dettaglio
  }
]

const router = new VueRouter({
  mode: 'history',
  routes
})

new Vue({
  router,
  render: h => h(App),
}).$mount('#app')
