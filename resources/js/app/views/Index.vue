<template>
    <CartArea>
        <div></div>

        <up-line-text></up-line-text>

        <CartArea>
            <back-cart-short/>

            <short-cart>
                <h1>Помоги нам сделать<br> твои обеды лучше</h1>
                <div class="bacgroundsoup">
                    <img src="/media/img/soupindex.svg" class="circul_backgroundgirl">
                </div>
            </short-cart>
        </CartArea>

        <progress-point v-bind:points="points"/>

        <button-action v-for="button of buttons"
                       :key="button.id"
                       v-bind:button="button"/>
    </CartArea>
</template>

<script>
    import CartArea from '../components/CartArea';
    import BackCartShort from '../components/BackCartShort';
    import ShortCart from '../components/ShortCart';
    import ProgressPoint from "../components/ProgressPoint";
    import ButtonAction from "../components/ButtonAction";
    import UpLineText from "../components/UpLineText";

    export default {
        name: "index",
        data() {
            return {
                buttons: [
                    {
                        id: 1,
                        buttonTitle: 'Начать!',
                        link: this.$route.params.school_uuid + '/part_one'
                    }
                ],
                points: [
                    {id: 1, color: false},
                    {id: 2, color: false},
                    {id: 3, color: false}
                ]
            }
        },
        components: {
            ProgressPoint,
            CartArea,
            ShortCart,
            BackCartShort,
            ButtonAction,
            UpLineText
        }
    }
</script>

<style scoped>
    .bacgroundsoup {
        padding-top: 2rem;
    }
</style>