<template lang="html" id="profille-tmplate">
    <div class="container profille page">
        <div class="row">
            <div class="col-md-12">
                <h1>{{page.title}}</h1>
                <p v-html="page.body"></p>
            </div>
        </div>
    </div>
</template>

<script>
    import axios from 'axios';

    export default {
        data() {
            return {
                page: {}
            }
        },
        methods: {
            loadPage: function () {
                axios.get('http://vue-library/router/', {'params': {'tp': 'profille'}}).then((response) => {
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

<style lang="sass">

</style>
