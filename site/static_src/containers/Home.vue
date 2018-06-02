<template lang="html" id="home-tmplate">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>{{page.title}}</h1>
                <p></p>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                page: {}
            }
        },
        methods: {
            loadProjects: function () {
                this.$http.get('http://vue-library/')
                .then(
                    (response) => {
                    // depending on your api, you may or may not have to make the .json() call 
                    // if your repsonse.body is null, try this response.json() 
                        this.page = response;
                    },
                    (err) => {
                        console.log(err)
                    }
                )
            }
        },
        mounted: function () {
            this.loadProjects()
        }
    }
</script>

<style lang="sass">

</style>
