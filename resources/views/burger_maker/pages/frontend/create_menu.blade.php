@extends('burger_maker.burger_wrapper')
@section('contents')
    <section class="my-5 py-5" id="burger_product_maker_body">
        <div class="container">
            <div class="card">
                <div class="card-header">
                    <h5>Create a custom {{ $menu->title }}</h5>
                </div>
                <div class="card-body">
                    <div class="burger_maker_demo_wrapper">
                        <div class="burger_show_demo_body">
                            <ul>
                                <li v-if="total_amount" class="total_price">
                                    <span>
                                        <b>Total:</b>
                                    </span>
                                    <span>
                                        <input type="number" v-model="food_qty" min="1" class="form-control d-inline-block" style="width: 70px;">
                                        <i class="fa fa-times text-success"></i>
                                        @{{total_amount}}
                                        = <b>@{{food_qty * total_amount}}</b>
                                    </span>
                                </li>
                                <li v-if="burger_bun.bottom">
                                    <img :src="burger_bun.bottom" alt="">
                                </li>
                                <li v-for="(item,index) in selected_item" :key="index">
                                    <img :src="item.image" :alt="item.title" :title="item.title" style="cursor: pointer;">
                                    <div class="details">
                                        <h6>@{{item.price}}</h6>
                                        <i class="fa fa-times border-0 text-success"></i>
                                        <input class="form-control" v-model="item.qty" min="1"
                                            @keyup="item.qty = $event.target.value" type="number">
                                        <h6 class="pr-3">= @{{item.price * item.qty}}</h6>
                                        <a href="#" @click.prevent="selected_item.splice(index,1)"><i
                                                class="fa fa-trash"></i></a>
                                    </div>
                                </li>
                                <li v-if="burger_bun.top">
                                    <img :src="burger_bun.top" alt="">
                                </li>
                            </ul>
                        </div>
                        <div class="burger_ingredient_qty">
                            <ul>
                                <li @click="select_ingredient(item)" v-for="(item,index) in burger_ingredient"
                                    :key="index">
                                    <img :src="item.image" alt="">
                                    <h3>
                                        @{{item.title}} <br>
                                        @{{item.price}} TK
                                    </h3>
                                </li>
                            </ul>
                        </div>
                        <div class="burger_ingredient_list" v-if="selected_item.length">
                            <button class="btn btn-lg btn-success mr-3" @click="add_to_cart">ADD TO CART</button>
                            <button class="btn btn-lg btn-warning" onclick="window.location=`/cart`">Goto cart list</button>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </section>

    @push('cjs')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.0.0-alpha.1/axios.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
        <script>
            new Vue({
                el: '#burger_product_maker_body',
                created: function () {
                    console.log(this.menu_id);
                    this.load_cart();
                },
                data: function () {
                    return {
                        selected_item: [],
                        burger_bun: {
                            bottom: `{!!$menu->base_bottom_image!!}`,
                            mid: '/contents/burger/images/burger/burger_bun_mid.png',
                            top: `{!!$menu->base_top_image!!}`,
                        },
                        burger_ingredient : JSON.parse(`{!!$menu->ingredients!!}`),
                        thumb_image: `{!!$menu->thumb_image!!}`,
                        menu_title: `{!!$menu->title!!}`,
                        menu_id: `{!!$menu->id!!}`,
                        food_qty: 1,
                    }
                },
                methods: {
                    load_cart: function(){
                        let cart_list = window.localStorage.getItem('cart_list');
                        try {
                            cart_list = JSON.parse(cart_list).find(i=>i.id==this.menu_id);
                            this.selected_item = cart_list.ingredients;
                            this.food_qty = cart_list.qty;
                            // console.log(cart_list);
                        } catch (error) {
                            console.log(error);
                        }
                    },
                    select_ingredient: function (item) {
                        let find_item = this.selected_item.find((i, index) => i.title == item.title);
                        if (find_item) {
                            find_item.qty++;
                        } else {
                            let temp_item = {
                                ...item,
                                qty: this.food_qty
                            };
                            this.selected_item.push(temp_item);
                        }
                    },
                    add_to_cart: function(){
                        let cart_list = window.localStorage.getItem('cart_list');

                        let temp_selected = {ingredients: [...this.selected_item]};
                        temp_selected.id = this.menu_id;
                        temp_selected.base_bottom_image = this.burger_bun.bottom;
                        temp_selected.base_top_image = this.burger_bun.top;
                        temp_selected.thumb_image = this.thumb_image;
                        temp_selected.title = this.menu_title;
                        temp_selected.qty = this.food_qty;
                        temp_selected.total_amount = this.total_amount;

                        try {
                            cart_list = JSON.parse(cart_list);
                            let find_item = cart_list.find((i, index) => i.id == temp_selected.id);
                            if(find_item){
                                find_item.qty = this.food_qty;
                                find_item.total_amount = this.total_amount;
                                find_item.ingredients = [...this.selected_item];
                                s_alert('success','product added to cart successfully');
                                return window.localStorage.setItem('cart_list',JSON.stringify(cart_list));
                            }
                        } catch (error) {
                            cart_list = [];
                        }
                        cart_list.push(temp_selected);
                        s_alert('success','product added to cart successfully');
                        return window.localStorage.setItem('cart_list',JSON.stringify(cart_list));
                    },
                },
                computed: {
                    total_amount: function () {
                        return this.selected_item.reduce((total, i) => total += (i.qty * i.price), 0);
                    }
                }
            })

            // burger_ingredient: [{
                        //         name: 'meat',
                        //         image: '/contents/burger/images/burger/meat.png',
                        //         price: 100,
                        //     },
                        //     {
                        //         name: 'onion',
                        //         image: '/contents/burger/images/burger/onion.png',
                        //         price: 10,
                        //     },
                        //     {
                        //         name: 'tomato',
                        //         image: '/contents/burger/images/burger/tomato.png',
                        //         price: 10,
                        //     },
                        //     {
                        //         name: 'mayonnaise',
                        //         image: '/contents/burger/images/burger/mayonnaise.png',
                        //         price: 5,
                        //     },
                        //     {
                        //         name: 'lettuce',
                        //         image: '/contents/burger/images/burger/lettuce.png',
                        //         price: 5,
                        //     },
                        //     {
                        //         name: 'cucember',
                        //         image: '/contents/burger/images/burger/cucumber.png',
                        //         price: 12,
                        //     },
                        //     {
                        //         name: 'cheese',
                        //         image: '/contents/burger/images/burger/cheese.png',
                        //         price: 10,
                        //     },
                        // ]
        </script>
    @endpush
@endsection
