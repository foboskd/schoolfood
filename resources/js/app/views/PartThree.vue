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

    export default {
        name: "PartThree",
        data() {
            return {
                buttons: [
                    {id: 3, buttonTitle: "Отправить отзыв!", link: '/end'}
                ],
                titleTexts: [
                    {id: 1, text: 'Что\n' + 'не так?'},
                    {id: 2, text: 'Опиши подробнее'}
                ]
            }
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