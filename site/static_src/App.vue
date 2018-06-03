<template>
	<div class="layout">
		<Header/>
		<Nav/>
		<router-view></router-view>
    <Footer/>
	</div>
</template>

<script>
	import Header from './components/Template/Header.vue';
	import Footer from './components/Template/Footer.vue';
	import Nav from './components/Template/Nav.vue';

	export default {
		components: {
			Header,
			Nav,
			Footer
		}
	};
</script>

<style lang="scss">
  *, *::before, *::after {
  	box-sizing: border-box;
  }
	body, html {
		height: 100%;
	}
	.layout {
		display: flex;
		height: 100%;
		flex-direction: column;
	}
	.page {
		flex-grow: 10;
	}
</style>
