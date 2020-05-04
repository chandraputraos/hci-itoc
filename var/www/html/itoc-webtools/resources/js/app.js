require('./bootstrap');

window.Vue = require('vue');

import VueRouter from 'vue-router';
Vue.use(VueRouter);

import VueAxios from 'vue-axios';
import axios from 'axios';
import datetime from 'vuejs-datetimepicker'

Vue.use(VueAxios, axios);



import IndexComponent from './components/posts/Index.vue';
import CreateComponent from './components/posts/Create.vue';
import EditComponent from './components/posts/Edit.vue';

const routes = [{
        name: 'posts',
        path: '/view',
        component: IndexComponent
    },
    {
        name: 'create',
        path: '/create',
        component: CreateComponent
    },
    {
        name: 'edit',
        path: '/edit/:id',
        component: EditComponent
    }
];

export default {
    components: { datetime }
};
const router = new VueRouter({
    mode: 'history',
    routes: routes
});

const app = new Vue(Vue.util.extend({ router })).$mount('#app');