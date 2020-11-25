<template>
    <short-cart :titleTexts="titleTexts">
        <button-photo/>
    </short-cart>
</template>

<script>

    import CartArea from "../components/CartArea";
    import BackCartShort from "../components/BackCartShort";
    import ShortCart from "../components/ShortCart";
    import ButtonPhoto from "../components/ButtonPhoto";
    import ProgressPoint from "../components/ProgressPoint";
    import ButtonAction from "../components/ButtonAction";
    import UpLineText from "../components/UpLineText";
    import UpArrow from "../components/BackButton";
    import store from "../store/index";

    export default {
        name: "PartTwo",
        data() {
            return {
                titleTexts: [
                    {id: 1, text: 'Не понравилось?'},
                    {id: 2, text: 'Cфотай еду'}
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
                title: 'Дальше!',
                routeName: 'PartThree',
                progress: 2
            });
        },
        components: {ButtonAction, ProgressPoint, CartArea, BackCartShort, ShortCart, ButtonPhoto, UpArrow, UpLineText}
    }
</script>

<style scoped>

</style>