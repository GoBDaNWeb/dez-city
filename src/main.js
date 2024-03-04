import "./shared/styles/index.scss";
import VueTheMask from "vue-the-mask";
import { createApp } from "vue";
import { createPinia } from "pinia";
import App from "./app/App.vue";

const app = createApp(App);

app.use(createPinia());
app.use(VueTheMask);

app.mount("#app");
