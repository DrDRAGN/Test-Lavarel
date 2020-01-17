require('./bootstrap');
window.Vue = require('vue');
import VueRouter from 'vue-router';
window.Vue.use(VueRouter);
//Vue.component( 'list-user-component', require('./components/listUser.vue').default );
import listUser from './components/listUser.vue';
import editUser from './components/editUser.vue';
import createUser from './components/createUser.vue';
const routes = [
    {path: '/', component: listUser, name: 'listUser' },
    {path: '/create', component: createUser, name: 'createUser' },
    {path: '/:id/edit', component: editUser, name: 'editUser' }
];
const router = new VueRouter({ routes });
//const app = new Vue({ el: '#app' });
const app = new Vue({ router }).$mount('#app');
