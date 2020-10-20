<template>
    <CartArea>
        <BackCartShort />
        <ShortCart>
            <EstimationRating></EstimationRating>
            <EstimationRatingResult></EstimationRatingResult>
        </ShortCart>
    </CartArea>
</template>

<script>
    import CartArea from "../components/CartArea";
    import BackCartShort from "../components/BackCartShort";
    import ShortCart from "../components/ShortCart";
    import EstimationRating from "../components/EstimationRating";
    import EstimationRatingResult from "../components/EstimationRatingResult";
    export default {
        name: "PartOne",
        components: {EstimationRatingResult, EstimationRating, BackCartShort, CartArea, ShortCart}
    }
</script>

<style scoped>

</style>