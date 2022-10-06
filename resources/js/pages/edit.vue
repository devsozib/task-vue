<template>
    <div>
      <h1>Edit Product</h1>
      <form @submit.prevent="updateProduct">
        <div class="row">
          <div class="col-md-4">
            <div class="form-group">
              <label>Product Name:</label>
              <input type="text" class="form-control" v-model="product.name">
            </div>
          </div>
          <div class="col-md-4">
              <div class="form-group">
                <label>Product Description:</label>
                <input class="form-control" type="text" v-model="product.description"/>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>Product Price:</label>
                <input class="form-control" type="number" v-model="product.price"/>
              </div>
            </div>
          <div class="form-group">
            <button class="btn btn-primary">Update</button>
          </div>
        </div>
      </form>
    </div>
  </template>

<script>
    import axios from 'axios';
    export default {

      data() {
        return {
          product: {}
        }
      },
      created() {
        // let uri = `http://localhost/product/edit/${this.$route.params.id}`;
          axios.get(this.$route.params.id).then((response) => {
            this.product = response.data;
            // console.log(response.data);
        });
      },
      methods: {
        updateProduct() {
          let uri = `http://127.0.0.1:8000/api/product/update/${this.$route.params.id}`;
             axios.post(uri,this.product).then((response) => {
            this.$router.push({name: 'Home'});
            // console.log(response.data);
          });
        }
      }
    }
</script>>

<style>

</style>
