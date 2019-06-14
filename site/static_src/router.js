import Vue from 'vue';
import Router from 'vue-router';
import home from './pages/home/Home.vue';
import books from './pages/books/books/Books.vue';
import book from './pages/books/book/Book.vue';
import chat from './pages/chat/Chat.vue';
import profile from './pages/profile/Profile.vue';
import contacts from './pages/contacts/Contacts.vue';
import login from './pages/auth/Login.vue';
// import Resource from 'vue-resource';
Vue.use(Router);
// Vue.use(Resource);
// роуты приложения
const routes = [
    { path: '/', component: home },
    { path: '/books', component: books },
    { path: '/book', component: book },
    { path: '/chat', component: chat },
    { path: '/profile', component: profile },
    { path: '/contacts', component: contacts },
    { path: '/login', component: login },
];
// экспорт роутера
export default new Router({ mode: 'history', routes, linkActiveClass: 'menu__link--active' });
