import axios from 'axios';
import { VueEditor } from "vue2-editor";

export default {
  components: {
    VueEditor
  },
  data() {
    return {
      page: {},
      content: null,
      newBook: {
        title: '',
        desc: '',
        body: '',
      },
      showForm: false,
      customToolbar: [
        ["bold", "italic", "underline"],
        [{ list: "ordered" }, { list: "bullet" }],
        ["image"]
      ],
    }
  },
  computed: {
    user() {
      return this.$store.state.user;
    },
    isAuthor() {
      return this.$store.state.user.role === 'author';
    },
  },
  methods: {
    openNewBookForm() {
      if (!this.showForm) {
        this.showForm = true;
      } else {
        this.showForm = false;
        this.newBook = {
          title: '',
          desc: '',
          body: '',
        };
      }
    },
    createNewBookForm() {
      const app = this;
      if (app.isAuthor) {
        const payload = {
          template: "book",
          parent: "/books/",
          title: app.newBook.title,
          desc: app.newBook.desc,
          body: app.newBook.body,
          name: `book-${Date.now()}`,
        };
        console.log(payload);
        app.$store.getters.ax.post('pages/1018', payload)
          .then((response) => {
            console.log(response.data);
          })
          .catch((error) => {
            console.log(err);
          });
        app.openNewBookForm();
        this.loadPage();
      }
    },
    loadPage() {
      const app = this;
      app.$store.getters.ax.get('pages/1018')
        .then((response) => {
          this.page = response.data
        }, (err) => {
          console.log(err);
        });
    },
  },
  mounted: function () {
    this.loadPage();
  }
};
