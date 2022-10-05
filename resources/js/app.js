import './bootstrap';
import { createApp } from 'vue/dist/vue.esm-bundler';
import App from './layouts/app.vue';
import router from './router/index.js';
const app = createApp({});

// import ProductList from './components/list.vue';
// import SideBar from './components/sidebar.vue';


// app.component('product-list', ProductList);
// app.component('side-bar', SideBar);

// app.use(router)
// app.mount('#app');

createApp(App)
.use(router)
.mount('#app');
