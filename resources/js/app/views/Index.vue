<template>
    <CartArea>
        <div ></div>
        <UpLineText></UpLineText>
        <CartArea>
            <BackCartShort />
            <ShortCart>
                    <h1>Помоги нам сделать<br> твои обеды лучше</h1>
                    <div class="bacgroundsoup">
                        <!--<img src="@/assets/img/soupindex.svg" class="circul_backgroundgirl">-->
                    </div>
            </ShortCart>
        </CartArea>
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
        data(){
            return{
                buttons:[
                    {id: 1, buttonTitle:"Начать!", link:'/part1'}
                ],
                points:[
                    {id: 1, color:false},
                    {id: 2, color:false},
                    {id: 3, color:false}
                ]
            }
        },
        components:{
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
    .bacgroundsoup{
        padding-top:2rem;
    }
</style>