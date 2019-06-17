<template lang="html" id="book-template">
  <v-container class="container book page">
    <v-layout>
      <v-flex xs12>
        <v-card class="mb-4">
          <v-card-title primary-title>
            <h1 class="headline mb-0">{{page.title}}</h1>
          </v-card-title>
          <v-card-text>
            <h4 class="">Описание:</h4>
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
              {{showForm ? 'Отменить' : 'Редактировать'}}
            </v-btn>
            <v-btn v-if="showForm" flat color="blue" @click="createNewBookForm">Сохранить</v-btn>
          </v-card-actions>
        </v-card>
      </v-flex>
    </v-layout>
  </v-container>
</template>

<script src="./Book.js"></script>
<style src="./Book.scss" lang="sass" scoped></style>
