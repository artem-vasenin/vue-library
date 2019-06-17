<template lang="html" id="chat-tmplate">
  <v-container class="container chat page">
    <v-layout row wrap>
      <v-flex md12>
        <h1>{{page.title}}</h1>
        <p v-html="page.body"></p>
      </v-flex>
    </v-layout>
  </v-container>
</template>

<script>
  export default {
    data() {
      return {
        page: {}
      }
    },
    methods: {
      loadPage: function () {
        const app = this;
        app.$store.getters.ax.get('pages/1019')
          .then((response) => {
            this.page = response.data
          }, (err) => {
            console.log(err)
          })
      }
    },
    mounted: function () {
      this.loadPage();
    }
  }
</script>

<style lang="sass" scoped>

</style>
