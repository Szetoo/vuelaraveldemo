// app.js



require('./bootstrap');

window.Vue = require('vue');

import VueRouter from 'vue-router';
Vue.use(VueRouter);

import VueAxios from 'vue-axios';
import axios from 'axios';

import App from './App.vue';
Vue.use(VueAxios, axios);

import MainBackgroundComponent from './components/MainBackgroundComponent.vue';
import MainLogoComponent from './components/MainLogoComponent.vue';
import CreateComponent from './components/CreateComponent.vue';
import LoginComponent from './components/LoginComponent.vue';
import EditComponent from './components/EditComponent.vue';


const routes = [
    {
        name: 'main',
        path: '/main',
        component: MainBackgroundComponent

    },
    {
        name: 'login',
        path: '/',
        component: LoginComponent
    },
    {
        name: 'edit',
        path: '/edit/:id',
        component: EditComponent
    }
];

const router = new VueRouter({ mode: 'history', routes: routes});
const app = new Vue(Vue.util.extend({ router }, App)).$mount('#app');
