<template>
    <div>
        <section>
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
        <!-- User Info -->
        <div class="user-info">
            <div class="image">
                <img src="" width="48" height="48" alt="User" />
            </div>
            <div class="info-container">
                <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></div>
                <div class="email"></div>
                <div class="btn-group user-helper-dropdown">
                    <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                    <ul class="dropdown-menu pull-right">
                        <li><a href="views/profile.html"><i class="material-icons">person</i>Profile</a></li>
                        <li role="separator" class="divider"></li>



                    </ul>
                </div>
            </div>
        </div>
        <!-- #User Info -->
        <!-- Menu -->
        <div class="menu">
            <ul class="list">
                <li class="header">MAIN NAVIGATION</li>
                <li class="active">
                    <router-link :to="{ name:'Home' }">
                        <i class="material-icons">dashboard</i>
                        <span>Product List</span>
                    </router-link>
                </li>
                <li class="active">
                    <router-link :to="{ name:'create' }">
                        <i class="material-icons">dashboard</i>
                        <span>Product Create</span>
                    </router-link>
                </li>






            </ul>
        </div>
        <!-- #Menu -->
        <!-- Footer -->
        <div class="legal">
            <div class="copyright">
                &copy; 2022 <a href="javascript:void(0);">OrginFood</a>.
            </div>
            <div class="version">
                <b>Version: </b> 0.0.1
            </div>
        </div>
        <!-- #Footer -->
    </aside>
    <!-- #END# Left Sidebar -->
    <!-- Right Sidebar -->

    <!-- #END# Right Sidebar -->
</section>

    </div>
</template>

<script>
export default {

}
</script>

<style>

</style>
