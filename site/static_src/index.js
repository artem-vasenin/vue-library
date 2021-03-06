import Vue from 'vue';
import Vuetify from 'vuetify';
import App from './App.vue';
import router from './router';
import {store} from './store';
import 'vuetify/dist/vuetify.min.css';

Vue.use(Vuetify);

new Vue({
  el: '#vue',
  router,
  store: store,
  render: h => h(App)
});
