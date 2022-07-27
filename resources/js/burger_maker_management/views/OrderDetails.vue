<template>
    <div>
        <h3>Order Management</h3>
        <div class="card mt-4">
            <div class="card-header bg-secondary text-light d-flex justify-content-between">
                <h4>Order Details</h4>
                <button v-if="order.status=='pending'" @click.prevent="complete_order" class="btn btn-warning">complete order</button>
                <button v-if="order.status=='completed'" class="btn btn-success">completed</button>
            </div>
            <div class="card-body">
                <table class="table table-borderless">
                    <tr>
                        <td style="width: 200px;">Name</td>
                        <td style="width: 3px;">:</td>
                        <td>{{order.full_name}}</td>
                    </tr>
                    <tr>
                        <td style="width: 200px;">Email</td>
                        <td style="width: 3px;">:</td>
                        <td>{{order.email}}</td>
                    </tr>
                    <tr>
                        <td style="width: 200px;">Phone Number</td>
                        <td style="width: 3px;">:</td>
                        <td>{{order.phone_number}}</td>
                    </tr>
                    <tr>
                        <td style="width: 200px;">Date</td>
                        <td style="width: 3px;">:</td>
                        <td>{{order.date}}</td>
                    </tr>
                    <tr>
                        <td style="width: 200px;">Time</td>
                        <td style="width: 3px;">:</td>
                        <td>{{order.start_time}} - {{order.end_time}}</td>
                    </tr>
                    <tr>
                        <td style="width: 200px;">Payment Status</td>
                        <td style="width: 3px;">:</td>
                        <td>{{order.payment_status}}</td>
                    </tr>
                    <tr>
                        <td style="width: 200px;">Payment method</td>
                        <td style="width: 3px;">:</td>
                        <td>{{order.payment_type}}</td>
                    </tr>
                    <tr>
                        <td style="width: 200px;">Payment id</td>
                        <td style="width: 3px;">:</td>
                        <td>{{order.payment_id}}</td>
                    </tr>
                    <tr>
                        <td style="width: 200px;">Delivery method</td>
                        <td style="width: 3px;">:</td>
                        <td>{{order.delivery_time}}</td>
                    </tr>
                    <tr>
                        <td style="width: 200px;">Delivery time</td>
                        <td style="width: 3px;">:</td>
                        <td>{{order.specific_time_watch_value}}</td>
                    </tr>
                    <tr>
                        <td style="width: 200px;">Delivery receive option</td>
                        <td style="width: 3px;">:</td>
                        <td>{{order.delivery_type}}</td>
                    </tr>
                    <tr>
                        <td style="width: 200px;">Booked Person</td>
                        <td style="width: 3px;">:</td>
                        <td>{{order.person}}</td>
                    </tr>
                </table>
            </div>

            <div class="card-body" v-if="order.order_booked_tables && order.order_booked_tables.length">
                <h4>Booked Table</h4>
                <div class="table_list" >
                    <div v-for="item in 5" :key="item" class="single_table">
                        <label v-for="chair in 4" :key="chair" class="custom_check_box">
                            <input name="booked_chairs[]" :value="`table_${item}_chair_no_${chair}`" type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <div class="table_no">
                            T{{item}}
                        </div>
                    </div>
                    <div style="width:100%;"></div>
                    <div v-for="item in 5" :key="item" class="single_table">
                        <label v-for="chair in 3" :key="chair" class="custom_check_box">
                            <input name="booked_chairs[]" :value="`table_${item}_3p_chair_no_${chair}`" type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <div class="table_no">
                            T{{item}}
                        </div>
                    </div>
                    <div style="width:100%;"></div>
                    <div v-for="item in 5" :key="item" class="single_table">
                        <label v-for="chair in 2" :key="chair" class="custom_check_box">
                            <input name="booked_chairs[]" :value="`table_${item}_2p_chair_no_${chair}`" type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <div class="table_no">
                            T{{item}}
                        </div>
                    </div>
                    <div style="width:100%;"></div>
                    <div v-for="item in 5" :key="item" class="single_table">
                        <label v-for="chair in 1" :key="chair" class="custom_check_box">
                            <input name="booked_chairs[]" :value="`table_${item}_1p_chair_no_${chair}`" type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <div class="table_no">
                            T{{item}}
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
                                <b>{{item.title}}</b>
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
                                                        {{ingredient.title}}
                                                    </span>
                                                </td>
                                                <td class="text-end" style="width: 132px;">
                                                    {{ingredient.qty}}
                                                    <i class="fa fa-times"></i>
                                                    {{ingredient.price}}
                                                    = {{ingredient.qty * ingredient.price}}
                                                </td>
                                            </tr>
                                        </table>
                                    </span>
                                    <!-- <img :src="item.base_bottom_image" style="width: 60px;margin:auto;" alt=""> -->
                                </div>
                            </td>
                            <td style="width: 200px;">
                                {{item.qty}}
                                <i class="fa fa-times"></i>
                                {{item.total_amount}}
                            </td>
                            <td class="text-end">
                                <b>{{item.qty * item.total_amount}}</b> TK
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="3" class="text-end">
                                <b>Total:</b>
                            </td>
                            <td class="text-end">
                                <b>{{order.total_amount}}</b> TK
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data: function(){
        return {
            order: []
        }
    },
    created: function(){
        this.get_order();
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
        get_order: function(){
            axios.get('/admin/get-order/'+this.$route.params.id)
                .then(res=>{
                    this.order = res.data;
                })
        },
        complete_order: function(){
            if(window.confirm('sure want to complete??')){
                axios.post('/admin/complete-order',{id: this.order.id})
                    .then(res=>{
                        this.order = res.data;
                    })
            }
        }

    }
}
</script>

<style scoped>
    table td{
        vertical-align: middle;
    }
</style>
