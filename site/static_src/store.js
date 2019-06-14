import Vue from 'vue';
import Vuex from 'vuex';
import axios from 'axios';

Vue.use(Vuex);

const baseURL = 'http://vue-library/api/pages/';
const autorization = 'Basic c2tvYmFyYXBpOjE4MDI3OQ==';

export const store = new Vuex.Store({
  state: {
    home: {},
    books: {},
    chat: {},
    profile: {},
    contacts: {},
    loading: false,
    user: {
      auth: true,
      role: 'author',
      roleTitle: 'Автор',
    },
  },
  mutations: {
    SetLoading(state, payload) {
      state.loading = payload;
    },
  },
  getters: {
    ax(state) {
      const ax = axios.create({
        baseURL,
        timeout: 60000,
        headers: {'Content-Type': 'application/json'},
      });
      ax.interceptors.request.use(
        (config) => {
          config.headers.Authorization = autorization;
          return config;
        },
        error => Promise.reject(error),
      );
      return ax;
    },
    axl(state) {
      const ax = axios.create({
        baseURL,
        timeout: 60000,
        headers: { 'Content-Type': 'application/json' },
      });
      ax.interceptors.request.use(
        (config) => {
          config.headers.Authorization = autorization;
          state.loading = true;
          return config;
        },
        error => Promise.reject(error),
      );
      ax.interceptors.response.use(
        (response) => {
          state.loading = false;
          return response;
        },
        (error) => {
          state.loading = false;
          return Promise.reject(error);
        },
      );
      return ax;
    },
  }
});