<template>
    <div>

        <up-line-text></up-line-text>
        <CartArea>
            <BackCartShort></BackCartShort>
            <ShortCart
                    v-for="titleText of titleTexts"
                    :key="titleText.id"
                    v-bind:titleText="titleText"
            >
                {{past}}<img src="../../public/media/img/backgroundimages/thanks.svg">

            </ShortCart>
            <ProgressPoint
                    v-bind:points="points"
            ></ProgressPoint>
            <ButtonAction
                    v-for="button of buttons"
                    :key="button.id"
                    v-bind:button="button"
            >
            </ButtonAction>
        </CartArea>

    </div>

</template>

<script>
    import {eventBus} from '../main';
    import UpLineText from "../components/UpLineText";
    import CartArea from "../components/CartArea";
    import BackCartShort from "../components/BackCartShort";
    import ShortCart from "../components/ShortCart";
    import ProgressPoint from "../components/ProgressPoint";
    import ButtonAction from "../components/ButtonAction";

    export default {
        name: "PartEnd",
        data(){
            return{
                buttons:[
                    {id: 4, buttonTitle:"Выйти!", link:'/'}
                ],
                points:[
                    {id: 1, color:true},
                    {id: 2, color:true},
                    {id: 3, color:true}
                ],
                titleTexts:[
                    {id:1, text:'Спасибо\n' + 'за вашу оценку'}
                ],
                past:null
            }
        },
        mounted (){
            eventBus.$on('EstimationRating', data =>{
                this.past = data.estimationIndex
            })
        },
        beforeDestroy() {
            eventBus.$off('EstimationRating', data =>{
                this.past = data.estimationIndex
            })
        },
        components: {ShortCart, BackCartShort, CartArea, UpLineText, ProgressPoint, ButtonAction}
    }
</script>

<style scoped>

</style>