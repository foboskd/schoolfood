<template>
    <short-cart :titleTexts="titleTexts">
        <text-zone/>
    </short-cart>
</template>

<script>

    import CartArea from "../components/CartArea";
    import BackCartShort from "../components/BackCartShort";
    import ShortCart from "../components/ShortCart";
    import TextZone from "../components/TextZone";
    import ProgressPoint from "../components/ProgressPoint";
    import ButtonAction from "../components/ButtonAction";
    import UpLineText from "../components/UpLineText";
    import UpArrow from "../components/BackButton";
    import store from "../store/index";

    export default {
        name: "PartThree",
        data() {
            return {
                titleTexts: [
                    {id: 1, text: 'Что\n' + 'не так?'},
                    {id: 2, text: 'Опиши подробнее'}
                ]
            }
        },
        beforeRouteEnter(to, from, next) {
            if (store.getters.getScore === -1) {
                return next();
            } else {
                return next({
                    name: 'PartOne'
                });
            }
        },
        created() {
            this.$store.commit('setProgress', 2);
            this.$store.commit('setButtonAction', {
                isDisabled: false,
                title: 'Отправить отзыв!',
                routeName: 'End',
                progress: 3
            });
        },
        components: {
            ButtonAction,
            ProgressPoint,
            CartArea,
            BackCartShort,
            ShortCart,
            TextZone,
            UpArrow,
            UpLineText
        }
    }
</script>

<style scoped>

</style>