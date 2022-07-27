@extends('burger_maker.burger_wrapper')
@section('contents')

    <section class="py-5 border border-top"  id="burger_product_maker_body">
        <div class="container py-5">
            <div class="card">
                <div class="card-header">
                    <h5>Cart List</h5>
                </div>
                <div class="card-body">
                    <table class="table text-center">
                        <thead>
                            <tr>
                                <th class="text-left">Name</th>
                                <th>Items</th>
                                <th>Qty</th>
                                <th class="text-right">Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="(item,index) in cart_list" :key="item.id">
                                <td class="text-left">
                                    <b>@{{item.title}}</b>
                                    <br>
                                    <a :href="`/create-menu-item/${item.id}`" class="text-info mr-3">Edit</a>
                                    <a @click.prevent="delete_from_cart(index)" class="text-danger" href="">Delete</a>
                                </td>
                                <td>
                                    <div class="d-flex flex-column justify-content-center gap-1">
                                        {{-- <img :src="item.base_top_image" style="width: 60px;margin:auto;" alt=""> --}}
                                        <span class="d-flex justify-content-center" v-for="(ingredient, index) in item.ingredients" :key="index">
                                            <img :src="ingredient.image" :alt="ingredient.title" style="width: 60px;" :title="ingredient.title">
                                            <div class="text-end" style="width: 140px;">
                                                @{{ingredient.qty}}
                                                <i class="fa fa-times"></i>
                                                @{{ingredient.price}}
                                                = @{{ingredient.qty * ingredient.price}}
                                            </div>
                                        </span>
                                        {{-- <img :src="item.base_bottom_image" style="width: 60px;margin:auto;" alt=""> --}}
                                    </div>
                                </td>
                                <td style="width: 200px;">
                                    <input type="number" v-model="item.qty" min="1" class="form-control" style="width: 100px;margin:auto;text-align: right;display: inline-block;">
                                    <i class="fa fa-times"></i>
                                    @{{item.total_amount}}
                                </td>
                                <td class="text-right">
                                    <b>@{{item.qty * item.total_amount}}</b> TK
                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="3" class="text-right">
                                    <b>Total:</b>
                                </td>
                                <td class="text-right">
                                    <b>@{{total_amount}}</b> TK
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <div class="card-footer text-right" v-if="cart_list.length">
                    <a href="#" @click.prevent="show_checkout_modal" class="btn btn-success">Checkout</a>
                </div>
            </div>
        </div>

        <div class="modal fade" id="checkoutModal" tabindex="-1" aria-labelledby="checkoutModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="checkoutModalLabel">Checkout Form</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="checkout_form">
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <h6>Payment</h6>
                                    <ul class="mt-2">
                                        <li>
                                            <label for="card">
                                                <input type="radio" id="card"
                                                    onchange="$('#reservation_button').show();"
                                                    checked name="payment_type" value="card">
                                                Card
                                            </label>
                                        </li>
                                        <li>
                                            <label for="cash">
                                                <input type="radio"
                                                    onchange="$('#reservation_button').hide();$('#table_list').hide();$('#delivery').trigger('click')"
                                                    id="cash" name="payment_type" value="cash">
                                                Cash
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <h6>Delivery Type</h6>
                                    <ul class="mt-2">
                                        <li>
                                            <label for="delivery">
                                                <input type="radio" checked id="delivery" name="delivery_type" onchange="$('#table_list').hide()" value="delivery">
                                                delivery
                                            </label>
                                        </li>
                                        <li>
                                            <label for="takeout">
                                                <input type="radio" id="takeout" name="delivery_type" onchange="$('#table_list').hide()" value="takeout">
                                                takeout
                                            </label>
                                        </li>
                                        <li style="display: block;" id="reservation_button">
                                            <label for="onsite">
                                                <input type="radio" id="onsite" name="delivery_type" onchange="$('#table_list').show()" value="onsite">
                                                reserve
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <h6>Delivery Time</h6>
                                    <ul class="mt-2">
                                        <li>
                                            <label for="as_soon_as_posible">
                                                <input type="radio" id="as_soon_as_posible" name="delivery_time" onchange="$('#specific_time_watch').hide()" value="as soon as posible">
                                                As soon as posible
                                            </label>
                                        </li>
                                        <li>
                                            <label for="specific_time">
                                                <input checked type="radio" id="specific_time" name="delivery_time" onchange="$('#specific_time_watch').show()" value="specific time">
                                                Specific time
                                            </label>
                                            <input type="time" :value="start_time" id="specific_time_watch" name="specific_time_watch_value" class="form-control ml-4 w-75">
                                        </li>
                                    </ul>
                                </div>
                                <hr>
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-lg-4 mb-4">
                                            <label for="">Full name</label>
                                            <input type="text" v-model="customer_full_name" name="full_name" class="form-control">
                                        </div>
                                        <div class="col-lg-4 mb-4">
                                            <label for="">Email</label>
                                            <input type="email" v-model="customer_email" name="email" class="form-control">
                                        </div>
                                        <div class="col-lg-4 mb-4">
                                            <label for="">Phone number</label>
                                            <input type="text" v-model="customer_phone_number" name="phone_number" class="form-control">
                                        </div>

                                        <div class="col-lg-12">
                                            <label for="">Comment</label>
                                            <textarea name="comment"  class="form-control"></textarea>
                                        </div>
                                        <div class="col-12 mt-4" id="table_list" style="display: none;">
                                            <h6>Book Table</h6>

                                            <div class="row mt-4">
                                                <div class="col-lg-4 mb-4">
                                                    <label for="">Person</label>
                                                    <input type="number" id="selected_persons" value="1" min="1" name="person" class="form-control">
                                                </div>
                                                <div class="col-lg-4 mb-4">
                                                    <label for="">Date</label>
                                                    <input type="date" name="date" v-model="today_date" class="form-control">
                                                </div>
                                                <div class="col-lg-4 mb-4">
                                                    <label for="">Start time</label>
                                                    <input type="time"  name="start_time" v-model="start_time" class="form-control">
                                                </div>
                                                <div class="col-lg-4 mb-4">
                                                    <label for="">End time</label>
                                                    <input type="time" name="end_time" v-model="end_time" class="form-control">
                                                </div>
                                            </div>
                                            <button @click.prevent="check_booked_table_status" type="button" class="btn btn-outline-info my-4">check booked status</button>

                                            <h6>Select Table</h6>
                                            <div class="table_list" >
                                                <div v-for="item in 5"  class="single_table">
                                                    <label v-for="chair in 4" class="custom_check_box">
                                                        <input name="booked_chairs[]" :value="`table_${item}_chair_no_${chair}`" type="checkbox">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <div class="table_no">
                                                        T@{{item}}
                                                    </div>
                                                </div>
                                                <div v-for="item in 5"  class="single_table">
                                                    <label v-for="chair in 3" class="custom_check_box">
                                                        <input name="booked_chairs[]" :value="`table_${item}_3p_chair_no_${chair}`" type="checkbox">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <div class="table_no">
                                                        T@{{item}}
                                                    </div>
                                                </div>
                                                <div v-for="item in 5"  class="single_table">
                                                    <label v-for="chair in 2" class="custom_check_box">
                                                        <input name="booked_chairs[]" :value="`table_${item}_2p_chair_no_${chair}`" type="checkbox">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <div class="table_no">
                                                        T@{{item}}
                                                    </div>
                                                </div>
                                                <div v-for="item in 5"  class="single_table">
                                                    <label v-for="chair in 1" class="custom_check_box">
                                                        <input name="booked_chairs[]" :value="`table_${item}_1p_chair_no_${chair}`" type="checkbox">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <div class="table_no">
                                                        T@{{item}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" @click="payment" class="btn btn-primary">( @{{total_amount}} TK ) Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @push('cjs')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.0.0-alpha.1/axios.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
        <script src="https://js.stripe.com/v3/"></script>
        <script src="https://momentjs.com/downloads/moment.min.js"></script>
        <script>
            new Vue({
                el: '#burger_product_maker_body',
                created: function () {
                    this.load_cart();
                },
                data: function () {
                    return {
                        today_date: moment().add(1, 'days').format('YYYY-MM-DD') ,
                        start_time: moment('2022-08-12 14:00').format('HH:MM') ,
                        end_time: moment('2022-08-12 15:00').format('HH:MM') ,
                        customer_full_name: window.localStorage.getItem('customer_full_name'),
                        customer_email: window.localStorage.getItem('customer_email'),
                        customer_phone_number: window.localStorage.getItem('customer_phone_number'),
                        cart_list: [],
                    }
                },
                watch: {
                    cart_list: {
                        handler: function(){
                            this.save_cart();
                        },
                        deep:true,
                    }
                },
                methods: {
                    save_cart:function(){
                        window.localStorage.setItem('cart_list',JSON.stringify(this.cart_list));
                    },
                    delete_from_cart: function(index){
                        window.confirm('are you sure!!') &&
                        this.cart_list.splice(index,1);
                    },
                    load_cart: function(){
                        this.cart_list = window.localStorage.getItem('cart_list');
                        try {
                            this.cart_list = JSON.parse(this.cart_list);
                        } catch (error) {
                            this.cart_list = [];
                        }
                    },

                    show_checkout_modal:function(){
                        $('#checkoutModal').modal('show')
                    },

                    check_booked_table_status: function(){
                        let data = {
                            date: this.today_date,
                            start_time: this.start_time,
                            end_time: this.end_time,
                        }
                        axios.post('/check-book-table-status',data)
                            .then(res=>{
                                $('.custom_check_box .checkmark').removeClass('disabled');
                                $(`.custom_check_box input`).prop('disabled',false);
                                for (const iterator of res.data) {
                                    // console.log(iterator);
                                    $(`input[value="${iterator.chair_no}"]`).prop('disabled',true);
                                    $(`input[value="${iterator.chair_no}"]`).prop('checked',false);
                                    $(`input[value="${iterator.chair_no}"]`).siblings('.checkmark').addClass('disabled');
                                }
                            })
                    },

                    check_count_selected_chair: function(){
                        let selected_persons = +$('#selected_persons').val();
                        let count_chair = 0;
                        let booked_chairs = $(`input[name="booked_chairs[]"]`);
                        for (const key in booked_chairs) {
                            if (Object.hasOwnProperty.call(booked_chairs, key)) {
                                const element = booked_chairs[key];
                                if(element.checked){
                                    count_chair++;
                                }
                            }
                        }
                        return count_chair > selected_persons
                        // console.log(count_chair > selected_persons, count_chair , selected_persons);
                    },

                    payment: function (event) {
                        // console.log(event);

                        let check_required_fields = this.customer_full_name.length && this.customer_full_name.length && this.customer_phone_number.length;
                        let check_reserved_extra_chair = this.check_count_selected_chair();

                        if(!check_required_fields){
                            alert("please fill your name, email and phone number");
                            return 0;
                        }

                        if($('#onsite').prop('checked') && check_reserved_extra_chair){
                            alert("you can not reserve extra chair.");
                            return 0;
                        }

                        console.log($('#onsite').prop('checked') );
                        if( window.confirm('sure want to confirm??')){
                            event.target.disabled = true;
                            var stripe = Stripe("pk_test_nUEz57FyiMHCR2sr6W0GM5vV00UHdEQWjC");

                            let form_data = new FormData(document.getElementById('checkout_form'));
                            form_data.append('cart_list',JSON.stringify(this.cart_list));
                            form_data.append('total_amount',this.total_amount);
                            form_data.append('total_qty',this.total_qty);

                            window.localStorage.setItem('customer_full_name',this.customer_full_name);
                            window.localStorage.setItem('customer_email',this.customer_email);
                            window.localStorage.setItem('customer_phone_number',this.customer_phone_number)

                            axios.post("/checkout-confirm",form_data)
                                .then(function (response) {
                                    event.target.disabled = false;
                                    if (response.data?.id) {
                                        return response.data;
                                    }else{
                                        // window.location = '/checkout_success';
                                    }

                                })
                                .then(function (session) {
                                    if(session?.id ){
                                        return stripe.redirectToCheckout({ sessionId: session.id });
                                    }
                                })
                                .then(function (result) {
                                    if (result?.error) {
                                        alert(result.error?.message);
                                    }
                                })
                                .then(()=>{
                                    window.location = '/checkout_success';
                                })
                                .catch(function (error) {
                                    event.target.disabled = false;
                                    console.error("Error:", error);
                                });
                        }
                    }
                },
                computed: {
                    total_amount: function () {
                        return this.cart_list.reduce((total, i) => total += (i.qty * i.total_amount), 0);
                    },
                    total_qty: function(){
                        return this.cart_list.reduce((qty, i) => qty += i.qty, 0);
                    }
                }
            })
        </script>
    @endpush
@endsection

