<template lang="html">
    <section class="section section--nav">
        <div class="container">
            <div class="row">
                <nav class="col-md-12 menu">
                    <ul class="menu__list">
                        <li class="menu__item">
                            <router-link class="menu__link" to="/books">Книги</router-link>
                        </li>
                        <li class="menu__item">
                            <router-link class="menu__link" to="/chat">Чат</router-link>
                        </li>
                        <li class="menu__item">
                            <router-link class="menu__link" to="/profille">Кабинет</router-link>
                        </li>
                        <li class="menu__item">
                            <router-link class="menu__link" to="/contacts">Контакты</router-link>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </section>
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
