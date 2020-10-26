<template>
    <!--школьный заголовок компонент-->
    <div class="school_title">
        <h1>МБОУ СШ №2</h1>
        <p>г. Липецк, ул. Первомайская, д. 58</p>
    </div>
</template>

<script>
    export default {
        name: "UpLineText"
    }
</script>

<style scoped>
    /*школьный заголовок компонент*/
    .school_title{
        max-width: 18rem;
        width: 100%;
        margin: 0 auto;
        padding-bottom:1.5rem;
    }

    .school_title h1{
        font-size:1.2rem;
        font-weight:700;
        text-align:center;
        font-family:ptrootuibold;
        color:rgb(79, 79, 79);
        margin:0;
    }

    .school_title p{
        font-size:.8rem;
        font-weight:500;
        text-align:center;
        font-family:ptrootui;
        color:rgb(79, 79, 79);
        margin:0;
    }

    /*школьный заголовок компонент, конец*/
</style>