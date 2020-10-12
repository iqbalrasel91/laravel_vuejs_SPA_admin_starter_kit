import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)



import Login from '../components/pages/login/LoginComponent.vue'
import ForgotPassword from '../components/pages/login/ForgotPasswordComponent.vue'
import Dashboard from '../components/pages/Dashboard/DashboardComponent.vue'


import mainLayout from '../components/pages/layout/main.vue'

const routes = new VueRouter({

    //php artisan serve na dile mode history kaj kore na
     mode : 'history',
     routes :[
        {
            path: '/',
            component: mainLayout,
            name: 'login',
            children: [
                {
                    path: '/',
                    component: Login
                }
         
            ]

        },
        {
            path: '/',
            component: mainLayout,
            name: 'dashboard',
            children: [
                {
                    path: '/dashboard',
                    component: Dashboard
                }
         
            ]

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