import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

export default new Vuex.Store({
    state: {
        api: 'http://127.0.0.1:8000/api/',
        school: null
    },
    mutations: {
        setSchool: function (state, payload) {
            state.school = payload;
        },
    },
    actions: {
        requestContent: async function ({commit, getters}, payload) {

        },
    },
    getters: {
        getSchool: (state) => state.school,
    },

});