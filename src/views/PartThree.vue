<template>
    <CartArea>
        <BackCartShort />
        <ShortCart>
            <TextZone />
        </ShortCart>
    </CartArea>
</template>

<script>
    import CartArea from "../components/CartArea";
    import BackCartShort from "../components/BackCartShort";
    import ShortCart from "../components/ShortCart";
    import TextZone from "../components/TextZone";

    export default {
        name: "PartThree",
        components: {CartArea, BackCartShort, ShortCart, TextZone}
    }
</script>

<style scoped>

</style>