<template lang="html">
  <div class="menu">
    <v-toolbar dark fixed color="primary" class="menu__toolbar">
      <v-toolbar-side-icon></v-toolbar-side-icon>

      <v-toolbar-title class="white--text">
        <router-link class="sitemane" to="/">Книгоманы</router-link>
      </v-toolbar-title>

      <v-spacer></v-spacer>

      <v-toolbar-items>
        <v-btn flat to="/books">Книги</v-btn>
        <v-btn flat to="/chat">Чат</v-btn>
        <v-btn flat to="/profille">Кабинет</v-btn>
        <v-btn flat to="/contacts">Контакты</v-btn>
        <v-btn icon to="/login">
          <v-icon>input</v-icon>
        </v-btn>
        <v-btn icon>
          <v-icon>logout</v-icon>
        </v-btn>
      </v-toolbar-items>
    </v-toolbar>
  </div>
</template>

<script>
  export default {
    data() {
      return {

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
