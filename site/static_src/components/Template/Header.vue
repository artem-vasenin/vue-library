<template lang="html">
	<header class="section section--header">
		<v-container class="container header">
			<v-layout row wrap>
				<v-flex md3 class="logo">
					<router-link class="logo__link" to="/"><i class="fas fa-book fa-2x"></i></router-link>
				</v-flex>
				<v-flex md6>
					Сервис для совместного написания книг
				</v-flex>
				<v-flex class="login" md3>
					<button class="btn btn-primary"><i class="fas fa-sign-in-alt"></i></button>
				</v-flex>
			</v-layout>
		</v-container>
  </header>
</template>

<script>
	export default {
		data() {
			return {
				
			}
		},
		methods: {
			
		}
	}
</script>

<style lang="scss" scoped>

</style>
