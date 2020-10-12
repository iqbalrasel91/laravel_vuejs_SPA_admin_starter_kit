import Vue from 'vue'
import routes from './router/route.js'
require('./bootstrap');

import CxltToastr from 'cxlt-vue2-toastr'
import 'cxlt-vue2-toastr/dist/css/cxlt-vue2-toastr.css'
var toastrConfigs = {
    position: 'top right',
    showDuration: 2000
}
Vue.use(CxltToastr, toastrConfigs)


window.Vue = require('vue');

const app = new Vue({
    el: '#app',
    router: routes,

});


