<template>
      <div>
        <section class="">
    <div class="container-fluid">
        <div class="block-header">
            <h2>
               Add Product
            </h2>
        </div>
        <!-- Basic Validation -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>Add Product</h2>
                        <ul class="header-dropdown m-r--5">
                            <router-link class="btn-sm btn-primary float-right" :to="{ name:'Home' }">All User</router-link>

                        </ul>
                    </div>
                    <div class="body">


            <div  v-if="isSuccess" class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Wow!</strong> Product added success
</div>
                        <form id="form_validation"  @submit.prevent="addProduct()">
                            <div class="body">
                                <div class="row clearfix">
                                    <div class="col-sm-4">
                                            <div class="form-line">
                                                <label class="">Product Name</label>
                                                <input v-model="products.name" type="text" class="form-control" placeholder="Product Name" name="name" required>

                                            </div>
                                        </div>

                                    <div class="col-sm-4">
                                        <label class="form-label">Description</label>
                                        <input type="text" v-model="products.description" class="form-control" placeholder="Product Description" name="name" required>
                                    </div>

                                    <div class="col-sm-4">
                                        <label class="form-label">Price</label>
                                        <input type="number" v-model="products.price" class="form-control" placeholder="Product Price" name="name" required>
                                    </div>


                                </div>



                            </div>
                            <button class="btn btn-primary waves-effect" type="submit">SUBMIT</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>


     </div>
    </template>

    <script>
import axios from 'axios';

    export default {
        name: "create",
        data() {
            return {
                isSuccess:false,
               products:{
                name:"",
                description:"",
                price:""
               }
            }
        },

        mounted() {

        },

        methods: {
            addProduct(){
                axios.post('product-store',{
                    params:{
                        data:this.products,
                    }
                }).then((res)=>{
                    this.isSuccess = true;
                    // this.message = res.data.isSuccess;
                    this.products = {};
                    //    console.log(res.data);
                }).catch((err)=>{

                });
            }
        }
    }
    </script>

    <style>

    </style>


