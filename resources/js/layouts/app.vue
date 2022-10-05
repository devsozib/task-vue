<template>
    <div>
<Header></Header>
<SideBar></SideBar>
<section class="content">
    <router-view></router-view>
</section>
</div>
</template>

<script>
    import Header from '../components/header.vue';
    import SideBar from '../components/sidebarnav.vue';
    export default{
           components:{
                Header,
                SideBar
           }
    }
</script>

<style>

</style>
