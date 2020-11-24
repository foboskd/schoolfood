<template>
    <div>
        <up-arrow v-for="arrow of arrows"
                  :key="arrow.id"
                  :arrow="arrow"/>

        <UpLineText></UpLineText>
        <CartArea>
            <BackCartShort/>
            <transition name="fadeCart">
                <ShortCart v-bind:titleTexts="titleTexts" v-if="animFadeCart">
                    <EstimationGoodBad></EstimationGoodBad>
                </ShortCart>
            </transition>
            <ProgressPoint v-bind:points="points"></ProgressPoint>
            <div v-if="eventActionFlag == null">
                <ButtonAction v-for="button of buttons" :key="button.id" v-bind:button="button"></ButtonAction>
            </div>
            <div v-else-if="eventActionFlag == '1'">
                <ButtonAction @click="animFadeCart = !animFadeCart" v-for="button of buttonsGoodWay" :key="button.id"
                              v-bind:button="button"></ButtonAction>
            </div>
            <div v-else-if="eventActionFlag == '-1'">
                <ButtonAction v-for="button of buttonBadWay" :key="button.id" v-bind:button="button"></ButtonAction>
            </div>
        </CartArea>
    </div>
</template>

<script>
    //import EstimationRating from "../components/EstimationRating";
    //import EstimationRatingResult from "../components/EstimationRatingResult";
    import CartArea from "../components/CartArea";
    import BackCartShort from "../components/BackCartShort";
    import ShortCart from "../components/ShortCart";
    import ProgressPoint from "../components/ProgressPoint";
    import ButtonAction from "../components/ButtonAction";
    import UpLineText from "../components/UpLineText";
    import UpArrow from "../components/BackButton";
    import EstimationGoodBad from "../components/EstimationGoodBad";
    import {eventBus} from "../main";

    export default {
        name: "PartOne",
        data() {
            return {
                titleTexts: [
                    {id: 1, text: 'Оцените качество'},
                    {id: 2, text: 'обеда в столовой'}
                ],
                buttonsGoodWay: [
                    {id: 1, buttonTitle: "Дальше!", link: '/end', attributeStyleDisable: false}
                ],
                buttonBadWay: [
                    {id: 1, buttonTitle: "Дальше!", link: '/part2', attributeStyleDisable: false}
                ],
                buttons: [
                    {id: 1, buttonTitle: "Проголосуй!", link: '', attributeStyleDisable: true}
                ],
                points: [
                    {id: 1, color: true},
                    {id: 2, color: false},
                    {id: 3, color: false}
                ],
                arrows: [
                    {id: 1, link: '/'}
                ],
                eventActionFlag: null,
                animFadeCart: true
            }
        },
        // watch(){
        //     eventBus.$on('animEvent', data => {
        //         this.animFadeCart = data.animFadeCart
        //         console.log(this.animFadeCart)
        //     });
        // },
        created() {
            eventBus.$on('eventActionFlag', data => {
                this.eventActionFlag = data.eventActionFlag;
                console.log(this.eventActionFlag)
            });
        },
        components: {
            EstimationGoodBad,
            UpArrow,
            UpLineText,
            BackCartShort,
            CartArea,
            ShortCart,
            ProgressPoint,
            ButtonAction
        }
    }
</script>

<style scoped>
    .fadeCart-enter-active {
        animation: bounce-in .5s;
        transition: all 400ms ease-out;
    }

    .fadeCart-leave-active {
        animation: bounce-in .5s reverse;
        transition: all 400ms ease-out;
    }

    @keyframes bounce-in {
        0% {
            transform: scale(0);
        }
        50% {
            transform: scale(1.5);
        }
    }
</style>