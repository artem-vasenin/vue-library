<template lang="html" id="books-template">
  <v-container class="container books page">
    <v-layout>
      <v-flex xs12 mb-4>
        <v-card class="mb-4">
          <v-card-title primary-title>
            <h1 class="headline mb-0">{{page.title}}</h1>
          </v-card-title>
          <v-card-text>
            <div class="books__desc" v-html="page.body"></div>

            <div v-if="showForm" class="books__add-form">
              <v-text-field
                v-model="newBook.title"
                label="Заголовок книги"
                outline
              ></v-text-field>
              <!--https://www.npmjs.com/package/vue2-editor-->
              <vue-editor
                v-model="newBook.desc"
                :editorToolbar="customToolbar"
                placeholder="Краткое описание"
                class="mb-4"
              ></vue-editor>
              <vue-editor
                v-model="newBook.body"
                :editorToolbar="customToolbar"
                placeholder="Полное описание"
              ></vue-editor>
            </div>
          </v-card-text>
          <v-card-actions v-if="isAuthor">
            <v-btn flat :color="showForm ? 'orange' : 'green'" @click="openNewBookForm">
              {{showForm ? 'Отменить' : 'Добавить книгу'}}
            </v-btn>
            <v-btn v-if="showForm" flat color="blue" @click="createNewBookForm">Сохранить</v-btn>
          </v-card-actions>
        </v-card>

        <v-card v-if="page.children">
          <v-card-title primary-title>
            <h1 class="headline mb-0">Список книг:</h1>
          </v-card-title>
          <v-list three-line class="py-0">
            <template v-for="(child, index) in page.children">
              <hr class="ma-0">

              <v-list-tile avatar @click="goToBook(child.id)">
                <v-list-tile-content class="py-2">
                  <v-list-tile-title>{{ child.title }}</v-list-tile-title>
                  <v-list-tile-sub-title v-if="child.desc" v-html="child.desc"></v-list-tile-sub-title>
                  <v-list-tile-sub-title v-else>
                    <p>Описание отсутствует</p>
                  </v-list-tile-sub-title>
                </v-list-tile-content>
              </v-list-tile>
            </template>
          </v-list>
        </v-card>
        <v-card v-else>
          <v-card-text>Список книг пуст. Вы можете стать первым, кто добавит новую книгу!</v-card-text>
        </v-card>
      </v-flex>
    </v-layout>
  </v-container>
</template>

<script src="./Books.js"></script>
<style src="./Books.scss" lang="sass"></style>
