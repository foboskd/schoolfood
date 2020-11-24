import Vue from 'vue'
import Vuex from 'vuex'
import App from './App.vue'
import VueRouter from 'vue-router'
import router from './router'
import store from './store'

export const eventBus = new Vue();

Vue.use(VueRouter)
Vue.use(Vuex)
Vue.config.productionTip = false

new Vue({
    router,
    store,
    render: h => h(App),
}).$mount('#app')
