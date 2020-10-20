<template>
    <CartArea>
        <BackCartShort />
        <ShortCart>
            <ButtonFoto />
        </ShortCart>
    </CartArea>
</template>

<script>
    import CartArea from "../components/CartArea";
    import BackCartShort from "../components/BackCartShort";
    import ShortCart from "../components/ShortCart";
    import ButtonFoto from "../components/ButtonFoto";
    export default {
        name: "PartTwo",
        components: {CartArea, BackCartShort, ShortCart, ButtonFoto}
    }
</script>

<style scoped>

</style>