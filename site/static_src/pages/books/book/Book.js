import { VueEditor } from "vue2-editor";

export default {
  components: {
    VueEditor
  },
  props: ['id'],
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
        this.newBook = {
          title: this.page.title,
          desc: this.page.desc,
          body: this.page.body,
        };
        this.showForm = true;
      } else {
        this.showForm = false;
      }
    },
    createNewBookForm() {
      const app = this;
      if (app.isAuthor) {
        const payload = {
          title: app.newBook.title,
          desc: app.newBook.desc,
          body: app.newBook.body,
        };
        console.log(payload);
        app.$store.getters.ax.put(`pages/${app.$props.id}`, payload)
          .then((response) => {
            app.loadPage();
            console.log(response.data);
          })
          .catch((error) => {
            console.log(error);
          });
        app.openNewBookForm();
      }
    },
    loadPage() {
      const app = this;
      app.$store.getters.ax.get(`pages/${app.$props.id}`)
        .then((response) => {
          app.page = response.data
        }, (err) => {
          console.log(err);
        });
    },
  },
  mounted: function () {
    this.loadPage();
  }
};
