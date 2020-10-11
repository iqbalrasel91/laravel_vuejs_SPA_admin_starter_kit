import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)



import Login from '../components/pages/login/LoginComponent.vue'
import ForgotPassword from '../components/pages/login/ForgotPasswordComponent.vue'
import Dashboard from '../components/pages/Dashboard/DashboardComponent.vue'


const routes = new VueRouter({

    //php artisan serve na dile mode history kaj kore na
     mode : 'history',
     routes :[
        {
            path: '/',
            component: Login,
            name: 'login'

        },
        {
            path: '/forgot-password',
            component: ForgotPassword,
            name: 'forgot-password'

        },
        {
            path: '/dashboard',
            component: Dashboard,
            name: 'dashboard'

        },


    ]


});

export default routes;