<template>
	<footer class="section section--footer">
		<div class="container">
			<div class="row">
				<div class="logo col-md-3">
					<a href="/"  class="logo__link"><i class="fas fa-book fa-2x"></i></a>
				</div>
				<div class="copy col-md-6">Сервис создан любителем книг для любителей книг!</div>
				<div class="counters col-md-3">Счётчики</div>
			</div>
		</div>
  </footer>
</template>

<script>

</script>

<style lang="scss">
	.section--footer {
		background: #313131;
		color: white;
		padding: 15px 0;
	}
	.logo {
		&__link {
			color: inherit;
			&:hover {
				color: red;
			}
		}
	}
	.copy {
		text-align: center;
		font-size: 12px;
	}
	.counters {
		text-align: right;
	}
</style>