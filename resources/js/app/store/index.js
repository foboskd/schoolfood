import Vue from 'vue'
import Vuex from 'vuex'
import axios from 'axios';

Vue.use(Vuex)

export default new Vuex.Store({
    state: {
        api: 'http://127.0.0.1:8000/api/',
        school: null,

        buttonAction: {
            isDisabled: false,
            title: 'Начать',
            routeName: 'PartOne',
            progress: 1
        },

        progress: {
            total: 3,
            current: 0
        },

        score: null,
        file: null,
        text: null

    },
    mutations: {
        setSchool: function (state, payload) {
            state.school = payload;
        },
        setButtonAction: function (state, payload) {
            state.buttonAction = payload;
        },
        setProgress: function (state, payload) {
            state.progress.current = payload;
        },
        setScore: function (state, payload) {
            state.score = payload;
        },
        setFile: function (state, payload) {
            state.file = payload;
        },
        setText: function (state, payload) {
            state.text = payload;
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
        getButtonAction: (state) => state.buttonAction,
        getProgress: (state) => state.progress,
        getScore: (state) => state.score,
        getFile: (state) => state.file,
        getText: (state) => state.text,
    },

});