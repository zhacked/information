require('./bootstrap');

window.Vue = require('vue').default;

import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)


let routes = [
    {
        path: '/dashboard', component: require('./components/Dashboard.vue').default
    },
    {
        path: '/users', component: require('./components/Users.vue').default
    },
    {
        path: '/profile', component: require('./components/Profile.vue').default
    },
]


const router = new VueRouter({
    mode: 'history',
    routes
})
const app = new Vue({
    el: '#app',
    router
});
