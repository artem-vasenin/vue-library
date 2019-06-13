<template lang="html" id="home-tmplate">
  <div class="container home page">
    <div class="row">
      <Aside class="col-md-3" :options="asideOptions"/>
      <div class="col-md-9">
        <h1>{{page.title}}</h1>
        <p v-html="page.body"></p>
      </div>
    </div>
  </div>
</template>

<script>
  import axios from 'axios';
  import Aside from '../components/Aside/Aside.vue';

  export default {
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
    components: {
      Aside
    }
  }
</script>

<style lang="sass">

</style>
