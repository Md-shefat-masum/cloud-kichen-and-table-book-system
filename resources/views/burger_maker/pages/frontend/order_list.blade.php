@extends('burger_maker.burger_wrapper')
@section('contents')

    <!-- About Part Start  -->
    <section id="about" class="py-5">
        <div class="container py-5">
            <h2>Order List</h2>
            <div class="card my-3" id="order_list">
                <div class="card-header">
                    <form @submit.prevent="search_orders">
                        <label for="">Your email or phone number</label>
                        <input type="text" v-model="search_key" value="" class="form-control my-2">
                        <button class="btn btn-sm btn-success">search</button>
                    </form>
                </div>
                <div class="card-body">
                    <table  class="table table-hover table-striped text-center">
                        <thead >
                            <tr >
                                <td >Customer</td>
                                <td >Qty</td>
                                <td >Total</td>
                                <td >Payment method</td>
                                <td >Payment</td>
                                <td >Order status</td>
                                <td >Action</td>
                            </tr>
                        </thead>
                        <tbody >
                            <tr v-for="(order, index) in order_list" :key="order.id">
                                <td>
                                    @{{order.full_name}} <br>
                                    @{{order.phone_number}} <br>
                                </td>
                                <td>
                                    @{{order.order_details.length}}
                                </td>
                                <td>
                                    @{{order.total_amount}}
                                </td>
                                <td>
                                    @{{order.payment_type}}
                                </td>
                                <td>
                                    @{{order.payment_status}}
                                </td>
                                <td>
                                    @{{order.status}}
                                </td>
                                <td >
                                    <a  href="#" @click.prevent="order_details(order)" class="btn btn-info mx-1">Show order details</a>
                                    <a v-if="order.status != 'canceled'" href="#" @click.prevent="cancel_order(index, order.id)" class="btn btn-danger">
                                        Cancel order
                                    </a>
                                </td>
                            </tr>

                        </tbody>
                    </table>

                    <div class="modal fade" id="checkoutModal" tabindex="-1" aria-labelledby="checkoutModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="checkoutModalLabel">Order Details</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="card-body">
                                        <table class="table table-borderless">
                                            <tr>
                                                <td style="width: 200px;">Name</td>
                                                <td style="width: 3px;">:</td>
                                                <td>@{{order.full_name}}</td>
                                            </tr>
                                            <tr>
                                                <td style="width: 200px;">Email</td>
                                                <td style="width: 3px;">:</td>
                                                <td>@{{order.email}}</td>
                                            </tr>
                                            <tr>
                                                <td style="width: 200px;">Phone Number</td>
                                                <td style="width: 3px;">:</td>
                                                <td>@{{order.phone_number}}</td>
                                            </tr>
                                            <tr>
                                                <td style="width: 200px;">Date</td>
                                                <td style="width: 3px;">:</td>
                                                <td>@{{order.date}}</td>
                                            </tr>
                                            <tr>
                                                <td style="width: 200px;">Time</td>
                                                <td style="width: 3px;">:</td>
                                                <td>@{{order.start_time}} - @{{order.end_time}}</td>
                                            </tr>
                                            <tr>
                                                <td style="width: 200px;">Payment Status</td>
                                                <td style="width: 3px;">:</td>
                                                <td>@{{order.payment_status}}</td>
                                            </tr>
                                            <tr>
                                                <td style="width: 200px;">Payment method</td>
                                                <td style="width: 3px;">:</td>
                                                <td>@{{order.payment_type}}</td>
                                            </tr>
                                            <tr>
                                                <td style="width: 200px;">Payment id</td>
                                                <td style="width: 3px;">:</td>
                                                <td>@{{order.payment_id}}</td>
                                            </tr>
                                            <tr>
                                                <td style="width: 200px;">Delivery method</td>
                                                <td style="width: 3px;">:</td>
                                                <td>@{{order.delivery_time}}</td>
                                            </tr>
                                            <tr>
                                                <td style="width: 200px;">Delivery time</td>
                                                <td style="width: 3px;">:</td>
                                                <td>@{{order.specific_time_watch_value}}</td>
                                            </tr>
                                            <tr>
                                                <td style="width: 200px;">Delivery receive option</td>
                                                <td style="width: 3px;">:</td>
                                                <td>@{{order.delivery_type}}</td>
                                            </tr>
                                            <tr>
                                                <td style="width: 200px;">Booked Person</td>
                                                <td style="width: 3px;">:</td>
                                                <td>@{{order.person}}</td>
                                            </tr>
                                        </table>
                                    </div>

                                    <div class="card-body" v-if="order.order_booked_tables && order.order_booked_tables.length">
                                        <h4>Booked Table</h4>
                                        <div class="table_list px-0 py-3" >
                                            <div v-for="item in 5" :key="item" class="single_table">
                                                <label v-for="chair in 4" :key="chair" class="custom_check_box">
                                                    <input name="booked_chairs[]" :value="`table_${item}_chair_no_${chair}`" type="checkbox">
                                                    <span class="checkmark"></span>
                                                </label>
                                                <div class="table_no">
                                                    T@{{item}}
                                                </div>
                                            </div>
                                            <div style="width:100%;"></div>
                                            <div v-for="item in 5" :key="item" class="single_table">
                                                <label v-for="chair in 3" :key="chair" class="custom_check_box">
                                                    <input name="booked_chairs[]" :value="`table_${item}_3p_chair_no_${chair}`" type="checkbox">
                                                    <span class="checkmark"></span>
                                                </label>
                                                <div class="table_no">
                                                    T@{{item}}
                                                </div>
                                            </div>
                                            <div style="width:100%;"></div>
                                            <div v-for="item in 5" :key="item" class="single_table">
                                                <label v-for="chair in 2" :key="chair" class="custom_check_box">
                                                    <input name="booked_chairs[]" :value="`table_${item}_2p_chair_no_${chair}`" type="checkbox">
                                                    <span class="checkmark"></span>
                                                </label>
                                                <div class="table_no">
                                                    T@{{item}}
                                                </div>
                                            </div>
                                            <div style="width:100%;"></div>
                                            <div v-for="item in 5" :key="item" class="single_table">
                                                <label v-for="chair in 1" :key="chair" class="custom_check_box">
                                                    <input name="booked_chairs[]" :value="`table_${item}_1p_chair_no_${chair}`" type="checkbox">
                                                    <span class="checkmark"></span>
                                                </label>
                                                <div class="table_no">
                                                    T@{{item}}
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="card-body">
                                        <table class="table text-center">
                                            <thead>
                                                <tr>
                                                    <th class="text-left">Name</th>
                                                    <th style="width: 360px;">Items</th>
                                                    <th>Qty</th>
                                                    <th class="text-right">Price</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr v-for="(item) in order.order_details" :key="item.id">
                                                    <td class="text-left">
                                                        <b>@{{item.title}}</b>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex flex-column gap-1">
                                                            <!-- <img :src="item.base_top_image" style="width: 60px;margin:auto;" alt=""> -->
                                                            <span v-for="(ingredient, index) in item.order_ingredients" :key="index">
                                                                <table class="table table-borderless">
                                                                    <tr>
                                                                        <td class="text-start">
                                                                            <span class="d-flex gap-1">
                                                                                <img :src="ingredient.image" :alt="ingredient.title" style="width: 60px;" :title="ingredient.title">
                                                                                @{{ingredient.title}}
                                                                            </span>
                                                                        </td>
                                                                        <td class="text-end" style="width: 132px;">
                                                                            @{{ingredient.qty}}
                                                                            <i class="fa fa-times"></i>
                                                                            @{{ingredient.price}}
                                                                            = @{{ingredient.qty * ingredient.price}}
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </span>
                                                            <!-- <img :src="item.base_bottom_image" style="width: 60px;margin:auto;" alt=""> -->
                                                        </div>
                                                    </td>
                                                    <td style="width: 200px;">
                                                        @{{item.qty}}
                                                        <i class="fa fa-times"></i>
                                                        @{{item.total_amount}}
                                                    </td>
                                                    <td class="text-end">
                                                        <b>@{{item.qty * item.total_amount}}</b> TK
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <td colspan="3" class="text-end">
                                                        <b>Total:</b>
                                                    </td>
                                                    <td class="text-end">
                                                        <b>@{{order.total_amount}}</b> TK
                                                    </td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- About Part End  -->
    @push('cjs')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.0.0-alpha.1/axios.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
        <script>
            new Vue({
                el: '#order_list',
                data: function(){
                    return {
                        search_key: window.localStorage.getItem('customer_phone_number'),
                        order_list: [],
                        order: {},
                    }
                },
                created: function(){
                    this.search_orders();
                },
                watch: {
                    order:{
                        handler: function(){
                            setTimeout(() => {
                                $('.custom_check_box .checkmark').removeClass('disabled');
                                $(`.custom_check_box input`).prop('disabled',false);
                                for (const iterator of this.order?.order_booked_tables) {
                                    console.log(iterator);
                                    $(`input[value="${iterator.chair_no}"]`).prop('disabled',true);
                                    $(`input[value="${iterator.chair_no}"]`).siblings('.checkmark').addClass('disabled');
                                }
                            }, 1000);
                        },
                        deep: true,
                    }
                },
                methods: {
                    search_orders: function(){
                        axios.post('/search-orders',{search_key: this.search_key})
                            .then(res=>{
                                console.log(res.data);
                                this.order_list = res.data;
                            })
                    },
                    cancel_order: function(index,id){
                        if(window.confirm('sure want to canceled')){
                            axios.post('/cancel-order',{id})
                                .then(res=>{
                                    console.log(res.data);
                                    this.order_list[index].status = res.data.status;
                                })
                        }
                    },
                    order_details: function(order){
                        $('#checkoutModal').modal('show');
                        this.order = order;
                    }
                }
            })
        </script>
    @endpush
@endsection

