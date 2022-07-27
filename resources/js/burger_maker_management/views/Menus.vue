<template>
    <div>
        <h3>Food Menu Management</h3>
        <div class="card mt-4">
            <div class="card-header bg-secondary text-light">
                <h4>Food menu list</h4>
            </div>
            <div class="card-body">
                <table class="table table-hover table-striped text-center">
                    <thead>
                        <tr>
                            <td>Title</td>
                            <td>preview</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="(food_menu,index) in food_menus" :key="food_menu.id">
                            <td>
                                {{food_menu.title}}
                            </td>
                            <td>
                                <div class="d-flex flex-column gap-1">
                                    <img :src="food_menu.base_top_image" style="width: 60px;margin:auto;" alt="">
                                    <span v-for="(ingredient, index) in JSON.parse(food_menu.ingredients)" :key="index">
                                        <img :src="ingredient.image" :alt="ingredient.title" style="width: 60px;" :title="ingredient.title">
                                    </span>
                                    <img :src="food_menu.base_bottom_image" style="width: 60px;margin:auto;" alt="">
                                </div>
                            </td>
                            <td>
                                <router-link class="btn btn-info mx-1" :to="{name:'MenuEdit',params: { id: food_menu.id }}">Show and edit</router-link>
                                <a class="btn btn-danger" @click.prevent="delete_menu(food_menu.id,index)" href="#">delete</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data: function(){
        return {
            food_menus: []
        }
    },
    created: function(){
        this.get_menus();
    },
    methods: {
        get_menus: function(){
            axios.get('/admin/food-menus')
                .then(res=>{
                    this.food_menus = res.data;
                })
        },
        delete_menu: function(id,index){
            window.confirm('sure want to delete??') &&
            axios.post('/admin/delete-food-menu',{id:id})
                .then(res=>{
                    this.food_menus.splice(index,1);
                })
        },
    }
}
</script>

<style scoped>
    table td{
        vertical-align: middle;
    }
</style>
