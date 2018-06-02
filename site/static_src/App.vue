<template>
	<div class="layout">
		<Header/>
		<Nav/>
		<Page/>
    <Footer/>
	</div>
</template>

<script>
import Header from './components/Template/Header.vue'
import Footer from './components/Template/Footer.vue'
import Nav from './components/Template/Nav.vue'
import Page from './components/Pages/Page.vue'

export default {
	components: {
    Header,
		Nav,
		Page,
    Footer
	}
}
</script>

<style>
  *, *::before, *::after {
  	box-sizing: border-box;
  }
</style>
