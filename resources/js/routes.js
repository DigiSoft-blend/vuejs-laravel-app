import Home from "./components/Home";
import Login from "./components/Login";
import LoginUser from "./components/LoginUser";
import Dashboard from "./components/Dashboard";
import NotFound from "./components/NotFound";
import Register from "./components/Register";
import Logout from "./components/Logout";
import store from './store/modules/auth' // your vuex store 


export default{
    mode: 'history',
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
        },
        {
            path: '/loginuser',
            component: LoginUser,
        },
        {
            path: '/dashboard',
            component: Dashboard,
            name: 'dashboard',
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