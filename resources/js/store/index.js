import Vue from "vue";
import Vuex from "vuex";
import auth from "./modules/auth";
import registration from "./modules/registration";


import Axios from 'axios';

// Load Vuex
Vue.use(Vuex);

Vue.use(Axios);

const debug = process.env.NODE_ENV !== "production";

// Create store
export default new Vuex.Store({
  modules: {
    auth,
    registration,
  },
  strict: debug
});