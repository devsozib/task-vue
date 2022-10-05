import { createWebHistory, createRouter } from "vue-router";
import ProductList from "../pages/list.vue";
import Create from "../pages/create.vue";
const routes = [
    {
        path:'/',
        name:'Home',
        component:ProductList

    },
    {
        path:'/product-create',
        name:'create',
        component:Create

    }
]

const router = createRouter({
     history: createWebHistory(),
     routes
})

export default router;
