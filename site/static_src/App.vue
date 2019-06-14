<template>
	<v-app>
		<v-content>
			<Nav/>
			<main class="mt-5 fill-height">
				<router-view></router-view>
			</main>
			<Footer/>
		</v-content>
	</v-app>
</template>

<script>
	import Footer from './components/Template/Footer.vue';
	import Nav from './components/Template/Nav.vue';

	export default {
		components: {
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
