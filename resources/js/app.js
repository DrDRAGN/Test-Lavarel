require('./bootstrap');
window.Vue = require('vue');
Vue.component( 'list-user-component', require('./components/listUser.vue').default );
const app = new Vue({ el: '#app' });
