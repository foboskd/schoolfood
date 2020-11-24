<template>
    <ShortCart v-bind:titleTexts="titleTexts">
        <EstimationGoodBad></EstimationGoodBad>
    </ShortCart>
</template>

<script>
    import ShortCart from "../components/ShortCart";
    import EstimationGoodBad from "../components/EstimationGoodBad";
    export default {
        name: "InPartOne",
        components: {EstimationGoodBad: EstimationGoodBad, ShortCart: ShortCart},
        data(){
            return{
                titleTexts:[
                    {id:1, text:'Оцените качество'},
                    {id:2, text:'обеда в столовой'}
                ],
            }
        }
    }
</script>

<style scoped>

</style>