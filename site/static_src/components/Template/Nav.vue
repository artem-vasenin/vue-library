<template lang="html">
  <div class="menu">
    <v-toolbar dark fixed color="primary" class="menu__toolbar">

      <v-menu offset-y>
        <template v-slot:activator="{ on }">
          <v-toolbar-side-icon class="hidden-md-and-up" v-on="on"></v-toolbar-side-icon>
        </template>
        <v-list>
          <v-list-tile
            v-for="item in items"
            :key="item.sort"
            :to="item.href"
          >
            <v-list-tile-title>{{ item.title }}</v-list-tile-title>
          </v-list-tile>
        </v-list>
      </v-menu>

      <v-toolbar-title class="white--text">
        <router-link class="sitemane" to="/">Книгоманы</router-link>
      </v-toolbar-title>

      <v-spacer></v-spacer>

      <v-toolbar-items class="hidden-sm-and-down">
        <v-btn
          v-for="item in items"
          :key="item.sort"
          flat :to="item.href"
        >
          <span v-if="item.title">{{item.title}}</span>
          <v-icon v-else>{{item.icon}}</v-icon>
        </v-btn>
      </v-toolbar-items>
      <v-btn icon to="/login">
        <v-icon>input</v-icon>
      </v-btn>
      <v-btn icon>
        <v-icon>logout</v-icon>
      </v-btn>
    </v-toolbar>
  </div>
</template>

<script>
  export default {
    data() {
      return {
        items: [
          { title: 'Книги', sort: 1, href: '/books', },
          { title: 'Чат', sort: 2, href: '/chat', },
          { title: 'Кабинет', sort: 3, href: '/profille', },
          { title: 'Контакты', sort: 4, href: '/contacts', },
        ],
      }
    },
    methods: {

    }
  }
</script>

<style lang="scss" scoped>
  .menu {
    position: relative;
    &__toolbar {

    }
  }
</style>
