import Vue from 'vue'
import Router from 'vue-router'
import Home from './views/Home.vue'


Vue.use(Router)

export default new Router({
  routes: [
    {path: '/', name: 'home',component: Home},
    {path: '/inicio', name: 'Proponentes',
    component: () => import('./components/Proponentes.vue')
  },

    {
      path: '/about',
      name: 'about',  
      component: () => import('./views/About.vue')
    }
  ]
})
