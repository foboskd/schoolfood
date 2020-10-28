import Vue from 'vue';
import VueRouter from 'vue-router';
import Index from './views/Index';
import PartOne from './views/PartOne';
import PartTwo from "./views/PartTwo";
import PartThree from "./views/PartThree";
import PartEnd from "./views/PartEnd";

Vue.use(VueRouter);

export default new VueRouter({
    mode:'history',
    routes:[
        {
            path: '/',
            name: 'index',
            component: Index
        },
        {
            path: '/part1',
            name: 'partone',
            component: PartOne
        },
        {
            path: '/part2',
            name: 'parttwo',
            component: PartTwo
        },
        {
            path: '/part3',
            name: 'partthree',
            component: PartThree
        },
        {
            path: '/end',
            name: 'end',
            component: PartEnd
        }
    ]
})