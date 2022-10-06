<template>
    <div>
    <div class="body table-responsive">
        <div  v-if="isSuccess" class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Wow!</strong> {{ message }}
</div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Product Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="(item,index) in products" :key="index">
                    <th scope="row">{{ index+1 }}</th>
                    <td>{{ item.name }}</td>
                    <td>{{ item.description }}</td>
                    <td>{{ item.price }}</td>
                    <td>
                        <router-link :to="{name: 'edit', params: { id: item.id }}" class="btn btn-primary">Edit</router-link>|
                        <a class="btn btn-danger" v-on:click="deleteProduct(item.id)">Delete</a>

                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
    </template>

    <script>
    export default {
        name: "list",
        data() {
            return {
              products:[],
              message:""
            }
        },

        mounted() {
           this.getData();
        },

        methods: {
            getData(){
        axios.get('api/product-list',{
        })
        .then((response)=>{
            this.products = response.data;
            this.message =  res.data.isSuccess;
            // console.log(response.data)
        })
        .catch(error=>{});
     },

     deleteProduct(id){
            axios.post('api/delete-product',{
                params:{
                    id: id,
                }
            }).then((res)=>{
                // console.log(res.data);
                this.isSuccess = true,
                this.message = res.data.isSuccess;
                this.getData();
            }).catch((err)=>{

            })
        }
        },


    }
    </script>

    <style>

    </style>
