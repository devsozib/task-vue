import { createWebHistory, createRouter } from "vue-router";
import ProductList from "../pages/list.vue";
import Create from "../pages/create.vue";
import Edit from "../pages/edit.vue";
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

    },
    {
        path:'/api/product/edit/:id',
        name:'edit',
        component:Edit

    }
]

const router = createRouter({
     history: createWebHistory(),
     routes
})

export default router;
