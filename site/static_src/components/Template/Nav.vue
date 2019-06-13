<template lang="html">
  <v-toolbar dark color="primary">
    <v-toolbar-side-icon></v-toolbar-side-icon>

    <v-toolbar-title class="white--text">Книгоманы</v-toolbar-title>

    <v-spacer></v-spacer>

    <v-toolbar-items>
      <v-btn flat to="/books">Книги</v-btn>
      <v-btn flat to="/chat">Чат</v-btn>
      <v-btn flat to="/profille">Кабинет</v-btn>
      <v-btn flat to="/contacts">Контакты</v-btn>
    </v-toolbar-items>

    <v-btn icon>
      <v-icon>search</v-icon>
    </v-btn>

    <v-btn icon>
      <v-icon>input</v-icon>
    </v-btn>

    <v-btn icon>
      <v-icon>logout</v-icon>
    </v-btn>
  </v-toolbar>
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

</style>
