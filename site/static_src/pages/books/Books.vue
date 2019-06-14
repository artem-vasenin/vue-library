<template lang="html" id="books-tmplate">
  <v-container class="container books page">
    <v-layout row wrap>
      <v-flex md12>
        <h1>{{page.title}}</h1>
        <p v-html="page.body"></p>
        <vue-editor v-model="content"></vue-editor>
      </v-flex>
    </v-layout>
  </v-container>
</template>

<script>
  import axios from 'axios';
  import { VueEditor } from "vue2-editor";

  export default {
    components: {
      VueEditor
    },
    data() {
      return {
        page: {},
        content: null,
      }
    },
    methods: {
      loadPage: function () {
        axios.get('http://vue-library/api/pages/1018')
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
