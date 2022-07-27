<template>
    <div>
        <h3>Order Management</h3>
        <div class="card mt-4">
            <div class="card-header bg-secondary text-light">
                <h4>Order list</h4>
            </div>
            <div class="card-body">
                <table class="table table-hover table-striped text-center">
                    <thead>
                        <tr>
                            <td>Order Id</td>
                            <td>Customer</td>
                            <td>Qty</td>
                            <td>Total</td>
                            <td>Payment</td>
                            <td>Status</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="(order,index) in all_orders" :key="order.id">
                            <td :key="index">
                                {{order.id}}
                            </td>
                            <td>
                                {{order.full_name}} <br>
                                {{order.phone_number}} <br>
                            </td>
                            <td>
                                {{order.order_details.length}}
                            </td>
                            <td>
                                {{order.total_amount}}
                            </td>
                            <td>
                                {{order.payment_status}}
                            </td>
                            <td>
                                {{order.status}}
                            </td>
                            <td>
                                <router-link class="btn btn-info mx-1" :to="{name:'OrderDetails',params: { id: order.id }}">Show and Complete</router-link>
                                <a v-if="order.status != 'canceled'" href="#" @click.prevent="cancel_order(index, order.id)" class="btn btn-warning mx-1">Cancel order</a>
                                <a class="btn btn-danger" @click.prevent="delete_order(order.id,index)" href="#">delete</a>
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
            all_orders: []
        }
    },
    created: function(){
        this.get_orders();
    },
    methods: {
        get_orders: function(){
            axios.get('/admin/get-orders')
                .then(res=>{
                    this.all_orders = res.data;
                })
        },

        delete_order: function(id,index){
            window.confirm('sure want to delete??') &&
            axios.post('/admin/delete-order',{id:id})
                .then(res=>{
                    this.all_orders.splice(index,1);
                })
        },

        cancel_order: function(index,id){
            if(window.confirm('sure want to canceled')){
                axios.post('/cancel-order',{id})
                    .then(res=>{
                        console.log(res.data);
                        this.all_orders[index].status = res.data.status;
                    })
            }
        },
    }
}
</script>

<style scoped>
    table td{
        vertical-align: middle;
    }
</style>
