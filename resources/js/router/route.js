import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)



import Login from '../components/pages/login/LoginComponent.vue'
import ForgotPassword from '../components/pages/login/ForgotPasswordComponent.vue'
import Dashboard from '../components/pages/Dashboard/DashboardComponent.vue'


import mainLayout from '../components/pages/layout/main.vue'
import loginMainLayout from '../components/pages/layout/login-main.vue'

const routes = new VueRouter({

    //php artisan serve na dile mode history kaj kore na
     mode : 'history',
     linkActiveClass: 'nav-active',
     routes :[
        {
            path: '/',
            component: loginMainLayout,
          //  meta: { componentShow: false },
            children: [
                {
                    path: '/',
                    name: 'login',
                    component: Login
                }
         
            ]

        },
        {
            path: '/dashboard',
            component: mainLayout,
            children: [
                {
                    path: '/dashboard',
                    name: 'dashboard',
                    component: Dashboard
                }
         
            ]

        },

         {
             path: '/forgot-password',
             component: loginMainLayout,
             children: [
                 {
                     path: '/forgot-password',
                     name: 'forgot-password',
                     component: ForgotPassword
                 }

             ]

         },



    ]


});

export default routes;