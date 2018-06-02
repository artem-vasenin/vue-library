<template>
	<section class="section section--nav">
		<div class="container">
			<div class="row">
				<nav class="col-md-12 menu">
          <ul class="menu__list">
            <li class="menu__item">
              <a class="menu__link" href="#">Книги</a>
            </li>
            <li class="menu__item">
              <a class="menu__link" href="#">Чат</a>
            </li>
            <li class="menu__item">
              <a class="menu__link" href="#">Кабинет</a>
            </li>
            <li class="menu__item">
              <a class="menu__link" href="#">Контакты</a>
            </li>
          </ul>
				</nav>
			</div>
		</div>
  </section>
</template>

<script>

</script>

<style lang="scss">
  .section--nav {
    background: #aaa;
  }
  .menu {
    &__list {
      margin: 0;
      padding: 0;
      list-style: none;
      display: flex;
      justify-content: space-between;
    }

    &__item {
      flex: 0 0 25%;
      max-width: 25%;
      border-left: 1px solid #ddd;
      &:last-child {
        border-right: 1px solid #ddd;
      }
    }

    &__link {
      display: block;
      padding: 5px 15px;
      text-align: center;
      text-transform: uppercase;
      text-decoration: none;
      color: inherit;

      &:hover {
        text-decoration: none;
        color: white;
      }
    }
  }    
</style>
