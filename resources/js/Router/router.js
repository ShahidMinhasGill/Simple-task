import Vue from 'vue'
import VueRouter from 'vue-router'
import addrecored from '../components/AddRecored'

Vue.use(VueRouter)

const routes = [
    {path: '/addrecored', component: addrecored},

]

const router = new VueRouter({
    routes,
     mode:'history'
})

export default router