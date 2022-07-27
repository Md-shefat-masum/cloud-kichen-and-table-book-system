<template>
    <div class="row">
        <nav id="sidebarMenu" class="col-md-3 pt-2 col-lg-2 d-md-block bg-light sidebar" >
            <div class="card">
                <div class="card-body text-center">
                    <!-- https://png.pngtree.com/png-vector/20191101/ourmid/pngtree-cartoon-color-simple-male-avatar-png-image_1934459.jpg -->
                    <img :src="`/${get_auth_information.photo}`" class="rounded rounded-circle img-thumbnail" style="width: 70px" />
                    <h6 class="text-capitalize">
                        {{get_auth_information.first_name}}
                        {{get_auth_information.last_name}} <br>
                        <small class="text-uppercase" style="font-size: 12px;">#{{get_auth_information.user_name}}</small>
                    </h6>
                </div>
            </div>
            <div class="pt-3">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <router-link class="nav-link" aria-current="page" :to="{name:'Dashboard'}">
                            <i class="fa fa-home"></i> &nbsp; Dashboard
                        </router-link>
                    </li>
                    <li class="nav-item">
                        <router-link class="nav-link" :to="{name:'MenuCreate'}">
                            <i class="fa fa-edit"></i> &nbsp; Menu create
                        </router-link>
                    </li>
                    <li class="nav-item">
                        <router-link class="nav-link" :to="{name:'Menus'}" >
                            <i class="fa fa-list"></i> &nbsp; Menu list
                        </router-link>
                    </li>
                    <li class="nav-item">
                        <router-link class="nav-link" :to="{name:'OrderList'}" >
                            <i class="fa fa-shopping-cart"></i> &nbsp; Order list
                        </router-link>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="#/admin/user-list" >
                            <i class="fa fa-user"></i> &nbsp; Customer list
                        </a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link" target="_blank" href="/">
                            <i class="fa fa-globe"></i> &nbsp; goto website
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <main class="p-3 main_content" style="flex: 1 1 0%">
            <router-view></router-view>
        </main>
    <div class="form_errors"></div>
    </div>

</template>

<script>
import { mapGetters } from 'vuex';
export default {
    computed: {
        ...mapGetters(['get_auth_information'])
    },
};
</script>

<style>
</style>
