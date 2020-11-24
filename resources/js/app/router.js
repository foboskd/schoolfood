import Vue from 'vue';
import VueRouter from 'vue-router';
import Review from './views/Review';
import Index from './views/Index';
import PartOne from './views/PartOne';
import PartTwo from "./views/PartTwo";
import PartThree from "./views/PartThree";
import PartEnd from "./views/PartEnd";
import NotFound404 from "./views/NotFound404";

Vue.use(VueRouter);

export default new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/review/:school_uuid',
            component: Review,
            children: [
                {
                    path: '/',
                    component: Index,
                    name: 'ReviewIndex'
                },
                {
                    path: 'part_one',
                    component: PartOne,
                    name: 'PartOne',
                },
                {
                    path: 'part_two',
                    component: PartTwo,
                    name: 'PartTwo'
                },
                {
                    path: 'part_three',
                    component: PartThree,
                    name: 'PartThree'
                },
                {
                    path: 'end',
                    component: PartEnd,
                    name: 'End',
                }
            ]
        },

        /*{
            path: '/review/:school_uuid',
            name: 'Index',
            component: Index
        },
        {
            path: '/review/:school_uuid/part_one',
            name: 'PartOne',
            component: PartOne,
            // children:[{
            //     path:'inpartone',
            //     component: InPartOne
            // }]
        },
        {
            path: '/review/:school_uuid/part_two',
            name: 'PartTwo',
            component: PartTwo
        },
        {
            path: '/review/:school_uuid/part_three',
            name: 'PartThree',
            component: PartThree
        },
        {
            path: '/review/:school_uuid/end',
            name: 'End',
            component: PartEnd
        },*/

        {
            path: '/*',
            name: 'NotFound404',
            component: NotFound404
        },
    ]
})