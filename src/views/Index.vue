<template>
    <CartArea>
        <BackCart />
        <LongCart>
        </LongCart>
    </CartArea>
</template>

<script>
    import CartArea from '../components/CartArea';
    import BackCart from '../components/BackCart';
    import LongCart from '../components/LongCart';

    export default {
        name: "index",
        components:{
            CartArea,
            LongCart,
            BackCart
        }
    }
</script>

<style scoped>

</style>