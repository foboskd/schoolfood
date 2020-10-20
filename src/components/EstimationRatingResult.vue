<template>
    <!--компонент вывода оценки числом-->
    <p>Ваша оценка <i class="number">1</i>/5</p>
</template>

<script>
    export default {
        name: "EstimationRatingResult"
    }
</script>

<style scoped>
    /*компонент вывода оценки числом*/
    .number{
        font-style:normal;
    }
</style>