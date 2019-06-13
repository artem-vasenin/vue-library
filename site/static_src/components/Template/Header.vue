<template lang="html">
	<header class="section section--header">
		<div class="container header">
			<div class="row">
				<div class="logo col-md-3">
					<router-link class="logo__link" to="/"><i class="fas fa-book fa-2x"></i></router-link>
				</div>
				<div class="sitename col-md-6">
					Сервис для совместного написания книг
				</div>
				<div class="login col-md-3">
					<button id="login" class="btn btn-primary"><i class="fas fa-sign-in-alt"></i></button>
				</div>
			</div>
		</div>
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
	.section--header {
		background: #313131;
		color: white;
		padding: 15px 0;

		.sitename {
			text-transform: uppercase;
			font-size: 14px;
			font-weight: bold;
			text-align: center;
		}

		.login {
			text-align: right;
		}
	}
</style>
