<template>
    <!--прогрессбар-->
    <article class="progresspoint_container">
        <div class="wrapper_point">
            <div class="point"></div>
            <div class="point"></div>
            <div class="point"></div>
        </div>
    </article>
</template>

<script>
    export default {
        name: "ProgressPoint"
    }
</script>

<style scoped>
    /*прогрессбар*/
    .progresspoint_container{
        max-width:18rem;
        width:100%;
        margin:0 auto;
    }

    .wrapper_point{
        width:5rem;
        margin:0 auto;
        display:flex;
        justify-content:space-around;
        padding-top:2.6rem;
        padding-bottom:1.6rem;
    }

    .point{
        width:1.1rem;
        height:1.1rem;
        background-color: #DADADA;
        border-radius:50%;
    }
</style>