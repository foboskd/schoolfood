import Vue from 'vue'
import Vuex from 'vuex'
import axios from 'axios';

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
        requestSchool: async function ({commit, getters}, payload) {

            axios.get(`${this.state.api}schools/${payload}`,)
                .then(res => {
                    commit('setSchool', res.data);
                })
                .catch(error => {
                    commit('setSchool', undefined);
                });
        },
    },
    getters: {
        getSchool: (state) => state.school,
    },

});