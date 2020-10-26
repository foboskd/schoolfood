<template>
    <CartArea>
        <BackCart />
        <LongCart>
        </LongCart>
        <ProgressPoint
                v-bind:points="points"
        >
        </ProgressPoint>
        <ButtonAction
                v-for="button of buttons"
                :key="button.id"
                v-bind:button="button"
        >
        </ButtonAction>
    </CartArea>
</template>

<script>
    import CartArea from '../components/CartArea';
    import BackCart from '../components/BackCart';
    import LongCart from '../components/LongCart';
    import ProgressPoint from "../components/ProgressPoint";
    import ButtonAction from "../components/ButtonAction";

    export default {
        name: "index",
        data(){
            return{
                buttons:[
                    {id: 1, buttonTitle:"Начать!", link:'/part1'}
                ],
                points:[
                    {id: 1, color:false},
                    {id: 2, color:false},
                    {id: 3, color:false}
                ]
            }
        },
        components:{
            ProgressPoint,
            CartArea,
            LongCart,
            BackCart,
            ButtonAction
        }
    }
</script>

<style scoped>

</style>