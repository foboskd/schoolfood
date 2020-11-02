<template>
    <div>
        <UpArrow
                    v-for="arrow of arrows"
                    :key="arrow.id"
                    v-bind:arrow="arrow"
        ></UpArrow>
        <UpLineText></UpLineText>
        <CartArea>
            <BackCartShort />
            <ShortCart
                    v-bind:titleTexts="titleTexts"
            >
                <ButtonFoto />
            </ShortCart>
            <ProgressPoint
                    v-bind:points="points"
            ></ProgressPoint>
            <ButtonAction
                    v-for="button of buttons"
                    :key="button.id"
                    v-bind:button="button"
            ></ButtonAction>
        </CartArea>
    </div>
</template>

<script>
    import CartArea from "../components/CartArea";
    import BackCartShort from "../components/BackCartShort";
    import ShortCart from "../components/ShortCart";
    import ButtonFoto from "../components/ButtonFoto";
    import ProgressPoint from "../components/ProgressPoint";
    import ButtonAction from "../components/ButtonAction";
    import UpLineText from "../components/UpLineText";
    import UpArrow from "../components/UpArrow";
    export default {
        name: "PartTwo",
        data(){
            return{
                buttons:[
                    {id: 2, buttonTitle:"Дальше!", link:'/part3'}
                ],
                points:[
                    {id: 1, color:true},
                    {id: 2, color:true},
                    {id: 3, color:false}
                ],
                arrows:[
                    {id: 1, link:'/part1'}
                ],
                titleTexts:[
                    {id:1, text:'Не понравилось?'},
                    {id:2, text:'Cфотай еду'}
                ]
            }
        },
        components: {ButtonAction, ProgressPoint, CartArea, BackCartShort, ShortCart, ButtonFoto, UpArrow, UpLineText}
    }
</script>

<style scoped>

</style>