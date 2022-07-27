<template>
    <div>
        <h3>Welcome to dashboard</h3>
        <div class="row mt-5">
            <div class="col-md-4">
                <div class="card text-white bg-primary mb-3">
                    <div class="card-body py-4">
                        <h2 class="card-title">Total Order</h2>
                        <hr/>
                        <h3 class="card-title text-end">{{at_a_glance.total_order}}</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-white bg-secondary mb-3">
                    <div class="card-body py-4">
                        <h2 class="card-title">Todays Order</h2>
                        <hr/>
                        <h3 class="card-title text-end">{{at_a_glance.today_order}}</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card bg-info mb-3">
                    <div class="card-body py-4">
                        <h2 class="card-title">Completed Order</h2>
                        <hr/>
                        <h3 class="card-title text-end">{{at_a_glance.completed_order}}</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card bg-warning mb-3">
                    <div class="card-body py-4">
                        <h2 class="card-title">Canceled Order</h2>
                        <hr/>
                        <h3 class="card-title text-end">{{at_a_glance.canceled_order}}</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-white bg-success mb-3">
                    <div class="card-body py-4">
                        <h2 class="card-title">Cash Order</h2>
                        <hr/>
                        <h3 class="card-title text-end">{{at_a_glance.cash_order}}</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-white bg-primary mb-3">
                    <div class="card-body py-4">
                        <h2 class="card-title">Card Order</h2>
                        <hr/>
                        <h3 class="card-title text-end">{{at_a_glance.card_order}}</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data: function(){
        return {
            at_a_glance: {},
        }
    },
    created: function(){
        this.get_at_a_glance();
    },
    methods: {
        get_at_a_glance: function(){
            axios.get('/at-a-glance')
                .then(res=>{
                    this.at_a_glance = res.data;
                })
        }
    }
};
</script>

<style>
</style>
