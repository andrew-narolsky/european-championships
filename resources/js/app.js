require('./bootstrap');

import Vue from 'vue';
import VueRouter from 'vue-router';
Vue.use(VueRouter);

// Import Router
import {routes} from './routes';
const router = new VueRouter({
    routes,
    mode: 'history'
});

// Main Menu
Vue.component('mainMenu', require('./components/menu/index').default);

const app = new Vue({
    el: '#app',
    router,
});
