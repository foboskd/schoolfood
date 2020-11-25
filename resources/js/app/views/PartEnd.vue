<template>
    <short-cart :titleTexts="titleTexts">
        <img src="/media/img/backgroundimages/thanks.svg">
    </short-cart>
</template>

<script>

    import axios from 'axios';
    import UpLineText from "../components/UpLineText";
    import CartArea from "../components/CartArea";
    import BackCartShort from "../components/BackCartShort";
    import ShortCart from "../components/ShortCart";
    import ProgressPoint from "../components/ProgressPoint";
    import ButtonAction from "../components/ButtonAction";
    import store from "../store/index";


    export default {
        name: "PartEnd",
        data() {
            return {
                titleTexts: [
                    {
                        id: 1,
                        text: 'Спасибо'
                    },
                    {
                        id: 2,
                        text: 'за вашу оценку'
                    }
                ],
            }
        },
        beforeRouteEnter(to, from, next) {
            if (store.getters.getScore === -1 || store.getters.getScore === 1) {
                return next();
            } else {
                return next({
                    name: 'PartOne'
                });
            }
        },
        created() {

            this.$store.commit('setProgress', 3);
            this.$store.commit('setButtonAction', {
                isDisabled: false,
                title: 'Выйти',
                routeName: 'ReviewIndex',
                progress: 1
            });

            this.$store.dispatch('sendReview', this.$route.params.school_uuid);

            /*console.log('testeventBus');
            this.rating = localStorage.getItem('countEstimation');
            this.testDescription = localStorage.getItem('textZoneDescription');
            this.fotoAdress = localStorage.getItem('fotAdds');

            const fData = new FormData();
            fData.append('rating', this.rating);
            fData.append('testDescription', this.testDescription);
            fData.append('fotoAdress', this.fotoAdress);
            fData.append('asscc', "test");

            localStorage.removeItem('countEstimation');
            localStorage.removeItem('textZoneDescription');
            localStorage.removeItem('fotAdds');

            axios.post('http://188.127.230.228/backend/querySum.php', fData, {
                headers: {
                    'Content-Type': 'multipart/form-data'
                }
            })
                .then(res => {
                    console.log(res)
                });*/
        },
        components: {
            ShortCart,
            BackCartShort,
            CartArea,
            UpLineText,
            ProgressPoint,
            ButtonAction
        }
    }
</script>

<style scoped>

</style>