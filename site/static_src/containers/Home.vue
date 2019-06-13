<template lang="html" id="home-tmplate">
  <v-container class="container home page">
    <v-layout row wrap>
      <v-flex md3>
        <Aside :options="asideOptions"/>
      </v-flex>
      <v-flex md9>
        <h1>{{page.title}}</h1>
        <p v-html="page.body"></p>
      </v-flex>
    </v-layout>
  </v-container>
</template>

<script>
  import axios from 'axios';
  import Aside from '../components/Aside/Aside.vue';

  export default {
    components: {
      Aside
    },
    data() {
      return {
        page: {},
        asideOptions: {
          title: 'Сайдбар'
        }
      }
    },
    methods: {
      loadPage: function () {
        axios.get('http://vue-library/api/pages/1')
          .then((response) => {
            this.page = response.data
          }, (err) => {
            console.log(err)
          })
      }
    },
    mounted: function () {
      this.loadPage();
    },
  }
</script>

<style lang="sass" scoped>

</style>
