<template>
    <!--стрелочка-->
    <div class="arrow_back" @click = "$router.push(`${arrow.link}`)">
        <p><img src="/media/img/arrow_back.svg"> Назад</p>
    </div>
</template>

<script>
    export default {
        props:['arrow'],
        name: "UpArrow"
    }
</script>

<style scoped>
    /*стрелочка*/
    .arrow_back{
        position:absolute;
        top: .1rem;
        width:100%;
    }

    .arrow_back p{
        color:#F68741;
        display:flex;
        align-items:center;
        justify-content:center;
        margin:0;
    }
</style>