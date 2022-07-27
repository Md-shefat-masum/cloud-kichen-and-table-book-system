<template>
    <div>
        <h3>Food Menu Management</h3>
        <div class="card mt-4">
            <div class="card-header bg-secondary text-light">
                <h4>Food menu edit</h4>
            </div>
            <div class="card-body">
                <form @submit.prevent="submit_data($event)" action="" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-lg-6 mb-3">
                            <label for="">title</label>
                            <input type="text" name="title" id="title" class="form-control">
                        </div>
                        <div class="col-lg-6 mb-3">
                            <label for="">Thumb image</label>
                            <div class="d-flex align-items-start gap-1">
                                <input type="file" accept="image/*" @change="image_url($event)" name="thumb_image" class="form-control">
                                <span><img :src="``" accept="image/*" id="thumb_image" class="img-thumbnail m-1" style="width: 80px;"></span>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <label for="">base bottom image</label>
                            <div class="d-flex align-items-start gap-1">
                                <!-- <input type="file" accept="image/*" @change="form_data.base_bottom_image = image_url($event, $event.target.files[0])" name="base_bottom_image" class="form-control"> -->
                                <input type="file" accept="image/*" @change="image_url($event)" name="base_bottom_image" class="form-control">
                                <span><img :src="``" id="base_bottom_image" class="img-thumbnail m-1" style="width: 80px;"></span>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <label for="">base top image</label>
                            <div class="d-flex align-items-start gap-1">
                                <input type="file" accept="image/*" @change="image_url($event)" name="base_top_image" class="form-control">
                                <span><img :src="``" id="base_top_image" class="img-thumbnail m-1" style="width: 80px;"></span>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="border border-1 border-dark rounded rounded-1 p-2">
                                <h4>Menu ingredients</h4>
                                <table class="table table-hover text-center">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Price</th>
                                            <th>Image</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for="(ingredient, index) in ingredients" :key="index">
                                            <td>
                                                <input type="text" :name="`ingredient[${index}][title]`" v-model="ingredient.title" class="form-control">
                                            </td>
                                            <td>
                                                <input type="text" :name="`ingredient[${index}][price]`" v-model="ingredient.price" class="form-control">
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-start gap-1">
                                                    <input type="file" :name="`ingredient[${index}][image]`" @change="image_url($event)" style="max-width: 100px;" class="form-control">
                                                    <span><img :src="`${ingredient.image}`" accept="image/*" class="img-thumbnail m-1" style="width: 80px;"></span>
                                                </div>
                                            </td>
                                            <td>
                                                <button v-if="ingredients.length>1" @click="remove_ingredient(index)" type="button" class="btn btn-sm btn-danger"><i class="fa fa-trash "></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="4" class="text-center">
                                                <button type="button" @click="push_ingredient" class="btn btn-sm btn-success"><i class="fa fa-plus "></i></button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-12 text-center py-3">
                            <button class="btn btn-success">submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
import axios from 'axios';
export default {
    created: function(){
        this.get_menu();
    },
    data: function(){
        return {
            ingredients: [],
            demo_ingredients: {
                title: '',
                price: 0,
                image: null,
            }
        }
    },
    methods: {
        get_menu: function(){
            axios.get('/admin/get-food-menu/'+this.$route.params.id)
                .then(res=>{
                    // console.log(res.data);
                    this.ingredients = JSON.parse(res.data.ingredients);
                    document.getElementById('title').value = res.data.title;
                    document.getElementById('thumb_image').src = res.data.thumb_image;
                    document.getElementById('base_bottom_image').src = res.data.base_bottom_image;
                    document.getElementById('base_top_image').src = res.data.base_top_image;
                })
        },
        remove_ingredient: function(index){
            this.ingredients.splice(index,1);
        },
        push_ingredient: function(){
            this.ingredients.push({...this.demo_ingredients});
        },
        image_url: function(event){
            // console.log(event);
            let blob_file = URL.createObjectURL(event.target.files[0]);
            var template = document.createElement('span');
            template.innerHTML = `<img src="${blob_file}" class="img-thumbnail m-1" style="width: 80px;" />`;
            $(event.target).siblings('span').remove();
            event.target.parentNode.appendChild(template);
        },
        submit_data: function(event){
            let form = new FormData(event.target);
            form.append('id',this.$route.params.id);

            axios.post('/admin/update-food-menu',form)
                .then(res=>{
                    // console.log(res.data);
                    this.$router.push({name:'Menus'})
                })
        }
    }
}
</script>

<style>

</style>
