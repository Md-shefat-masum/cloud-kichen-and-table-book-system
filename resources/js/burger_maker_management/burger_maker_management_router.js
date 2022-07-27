import Vue from 'vue'
import VueRouter from 'vue-router'

import Layout from './views/Layout'
import Dashboard from './views/Dashboard'
import Menus from './views/Menus'
import MenuCreate from './views/MenuCreate'
import MenuEdit from './views/MenuEdit'
import OrderList from './views/OrderList'
import OrderDetails from './views/OrderDetails'


Vue.use(VueRouter);
window.Fire = new Vue();

const routes = [{
        path: '/',
        component: Layout,
        children: [{
            path: '',
            name: 'Dashboard',
            component: Dashboard
        },
        {
            path: 'food-menus',
            name: 'Menus',
            component: Menus
        },
        {
            path: 'food-menu-create',
            name: 'MenuCreate',
            component: MenuCreate
        },
        {
            path: 'food-menu-edit/:id',
            name: 'MenuEdit',
            component: MenuEdit
        },
        {
            path: 'order-list',
            name: 'OrderList',
            component: OrderList
        },
        {
            path: 'order-details/:id',
            name: 'OrderDetails',
            component: OrderDetails
        },
    ]
    },
];

const burger_maker_management_router = new VueRouter({
    routes,
    mode: 'hash',
    linkExactActiveClass: 'active',
    // scrollBehavior: function(to, from, savedPosition) {
    //     return { x: 0, y: 0 }
    // }
});

burger_maker_management_router.beforeEach((to, from, next) => {
    let isAuthenticated = window.localStorage?.token?.length ? true : false;
    let check_route = (to.path?.split('/').length) && (to.path?.split('/')[1] == 'tada') ;

    if(isAuthenticated){
        window.axios.defaults.headers.common["Authorization"] = `Bearer ${window.localStorage?.token}`;
    }else{
        window.axios.defaults.headers.common["Authorization"] = null;
    }

    if (( check_route == true ) && (isAuthenticated == false) ){
        next({
            name: 'login'
        })
    }
    else {
        next()
    }
})

export default burger_maker_management_router
