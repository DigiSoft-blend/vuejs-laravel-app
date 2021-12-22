import Home from "./components/Home";
import Login from "./components/Login";
import LoginUser from "./components/LoginUser";
import Dashboard from "./components/Dashboard";
import NotFound from "./components/NotFound";
import Register from "./components/Register";
import Logout from "./components/Logout";
import store from './store/modules/auth' // your vuex store 

// const ifNotAuthenticated = (to, from, next) => {
//   if (!store.getters.isAuthenticated) {
//     next()
//     return
//   }
//   next('/')
// }

// const ifAuthenticated = (to, from, next) => {
//   if (store.getters.isAuthenticated) {
//     next()
//     return
//   }
//   next('/login')
// }

export default{
    mode: 'history',
    linkActiveClass: 'font-semibold',
    routes: [
        {
            path: '*',
            component: NotFound
        },
        {
            path: '/',
            component: Home,
            name: 'Home'
        },
        {
            path: '/login',
            component: Login,
            
            // beforeEnter: ifNotAuthenticated,
        },
        {
            path: '/loginuser',
            component: LoginUser,
            
            // beforeEnter: ifNotAuthenticated,
        },
        {
            path: '/dashboard',
            component: Dashboard,
            name: 'dashboard',
            // beforeEnter: ifAuthenticated,
        },
        {
            path: '/register',
            component: Register,
           
        },
      
        {
            path: '/logout',
            component: Logout,
            name: 'logout'
        }
    ]
}