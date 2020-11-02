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
                <TextZone />
            </ShortCart>
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
    </div>
</template>

<script>
    import CartArea from "../components/CartArea";
    import BackCartShort from "../components/BackCartShort";
    import ShortCart from "../components/ShortCart";
    import TextZone from "../components/TextZone";
    import ProgressPoint from "../components/ProgressPoint";
    import ButtonAction from "../components/ButtonAction";
    import UpLineText from "../components/UpLineText";
    import UpArrow from "../components/UpArrow";

    export default {
        name: "PartThree",
        data(){
            return{
                buttons:[
                    {id: 3, buttonTitle:"Отправить отзыв!", link:'/end'}
                ],
                points:[
                    {id: 1, color:true},
                    {id: 2, color:true},
                    {id: 3, color:true}
                ],
                arrows:[
                    {id: 1, link:'/part2'}
                ],
                titleTexts:[
                    {id:1, text:'Что\n' + 'не так?'},
                    {id:2, text:'Опиши подробнее'}
                ]
            }
        },
        components: {ButtonAction, ProgressPoint, CartArea, BackCartShort, ShortCart, TextZone, UpArrow, UpLineText}
    }
</script>

<style scoped>

</style>