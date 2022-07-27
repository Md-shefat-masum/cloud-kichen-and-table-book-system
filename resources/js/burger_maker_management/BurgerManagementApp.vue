<template>
    <router-view></router-view>
</template>

<script>
import { mapActions, mapMutations } from 'vuex';

export default {
    props:['user'],
    created: function(){
        // console.log(this.user);
        this.set_auth_information(JSON.parse(this.user));
    },
    data: function () {
        return {
        };
    },
    methods: {
        ...mapMutations(['set_auth_information'])
    },

};
</script>

<style scoped>
.form_errors {
    position: fixed;
    top: 81px;
    background: white;
    right: 0;
    border: 1px solid #ff000029;
    border-radius: 5px;
}
</style>
