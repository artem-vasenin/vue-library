<template>
    <main class="section section--main">
        <Home/>
    </main>
</template>

<script>
    import Home from './Home.vue'

    export default {
        components: {
            Home
        }
    }
</script>

<style lang="scss">
    .section--main {
        flex-grow: 10;
        padding: 15px 0;
    }
</style>