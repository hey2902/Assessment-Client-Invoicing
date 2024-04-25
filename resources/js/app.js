import Vue from 'vue';
import ClientManagement from './components/ClientManagement.vue';

// Register the Vue component globally
Vue.component('client-management', ClientManagement);

const app = new Vue({
    el: '#app'
});


