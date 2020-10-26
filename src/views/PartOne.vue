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
            <ShortCart>
                <EstimationRating></EstimationRating>
                <EstimationRatingResult></EstimationRatingResult>
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
    import EstimationRating from "../components/EstimationRating";
    import EstimationRatingResult from "../components/EstimationRatingResult";
    import ProgressPoint from "../components/ProgressPoint";
    import ButtonAction from "../components/ButtonAction";
    import UpLineText from "../components/UpLineText";
    import UpArrow from "../components/UpArrow";

    export default {
        name: "PartOne",
        data(){
            return{
                buttons:[
                    {id: 1, buttonTitle:"Дальше!", link:'/part2'}
                ],
                points:[
                    {id: 1, color:true},
                    {id: 2, color:false},
                    {id: 3, color:false}
                ],
                arrows:[
                    {id: 1, link:'/'}
                ]
            }
        },
        components: {
            UpArrow,
            UpLineText,
            EstimationRatingResult,
            EstimationRating,
            BackCartShort,
            CartArea,
            ShortCart,
            ProgressPoint,
            ButtonAction
        }
    }
</script>

<style scoped>

</style>