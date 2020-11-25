<template>
    <short-cart :titleTexts="titleTexts" v-if="animFadeCart">
        <estimation-good-bad/>
    </short-cart>
</template>

<script>

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
                eventActionFlag: null,
                animFadeCart: true
            }
        },
        mounted() {
            this.$store.commit('setProgress', 1);
            this.$store.commit('setButtonAction', {
                isDisabled: true,
                title: 'Проголосуй!',
                routeName: 'PartTwo',
                progress: 2
            });
        },
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