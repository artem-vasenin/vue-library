import Vue from 'vue';
import Router from 'vue-router';
Vue.use(Router);
import home from './containers/Home.vue';
import books from './containers/Books.vue';
import chat from './containers/Chat.vue';
import profille from './containers/Profille.vue';
import contacts from './containers/Contacts.vue';
// роуты приложения
const routes = [
    { path: '/', component: home },
    { path: '/books', component: books },
    { path: '/chat', component: chat },
    { path: '/profille', component: profille },
    { path: '/contacts', component: contacts }
];
// экспорт роутера
export default new Router({ mode: 'history', routes, linkActiveClass: 'menu__link--active' });