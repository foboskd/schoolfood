<template>
    <div>

        <up-line-text></up-line-text>
        <CartArea>
            <BackCartShort></BackCartShort>
            <ShortCart
                    v-bind:titleTexts="titleTexts"
            >
                <img src="../../public/media/img/backgroundimages/thanks.svg">

            </ShortCart>
            <ProgressPoint
                    v-bind:points="points"
            ></ProgressPoint>
            <ButtonAction
                    v-for="button of buttons"
                    :key="button.id"
                    v-bind:button="button"
                    v-on:click="sendInfo"
            >
            </ButtonAction>
        </CartArea>

    </div>

</template>

<script>
    //import {eventBus} from '../main';
    import axios from 'axios';
    import UpLineText from "../components/UpLineText";
    import CartArea from "../components/CartArea";
    import BackCartShort from "../components/BackCartShort";
    import ShortCart from "../components/ShortCart";
    import ProgressPoint from "../components/ProgressPoint";
    import ButtonAction from "../components/ButtonAction";

    export default {
        name: "PartEnd",
        data(){
            return{
                buttons:[
                    {id: 4, buttonTitle:"Выйти!", link:'/'}
                ],
                points:[
                    {id: 1, color:true},
                    {id: 2, color:true},
                    {id: 3, color:true}
                ],
                titleTexts:[
                    {id:1, text:'Спасибо'},
                    {id:2, text:'за вашу оценку'}
                ],
                rating:null,
                testDescription:null,
                fotoAdress:null
            }
        },
        created (){
            console.log('testeventBus');
            this.rating = localStorage.getItem('countEstimation');
            this.testDescription = localStorage.getItem('textZoneDescription');
            this.fotoAdress = localStorage.getItem('fotAdds');
            axios.post('http://192.168.0.151/abc.php', {
                rating: this.rating,
                testDescription: this.testDescription,
                fotoAdress: this.fotoAdress
            }, {
                headers:{
                    'Content-Type': 'multipart/form-data'
                }
            })
                .then(res => {
                    console.log(res)
                })
        }/*,
        methods:{
            sendInfo() {
                console.log('click')
                axios.get('http://192.168.0.151/test.php', {
                    rating: this.rating,
                    testDescription: this.testDescription,
                    fotoAdress: this.fotoAdress
                }, {
                    headers:{
                        'Content-Type': 'multipart/form-data'
                    }
                })
                    .then(res => {
                        console.log(res)
                    })
            }
        }*/,
        components: {ShortCart, BackCartShort, CartArea, UpLineText, ProgressPoint, ButtonAction}
    }
</script>

<style scoped>

</style>