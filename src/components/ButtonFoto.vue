<template>
    <!--Кнопки сделать фото внутри шорткарточки-->
    <div class="button_zone">
        <button class="fotoadd" type="file"><img src="../../public/media/img/galery.svg">&nbsp;&nbsp;Добавить из галереи</button>
        <br>
        <p class="pretext">Или</p>
        <br>
        <button class="fotoadd"><img src="../../public/media/img/fcamera.svg">&nbsp;&nbsp;Сделать фото</button>
    </div>
</template>

<script>
    export default {
        name: "ButtonFoto"
    }
</script>

<style scoped>
    /*Кнопки сделать фото внутри шорткарточки*/
    .button_zone{
        display:flex;
        flex-direction:column;
        width:100%;
        height:100%;
        justify-content:flex-end;
        align-items:center;
    }

    .fotoadd{
        width:15rem;
        height:3rem;
        border:none;
        border-radius:.57rem;
        background-color:#F0F0F0;
        display:flex;
        align-items:center;
        justify-content:center;
        flex-direction:row;
    }

    .pretext{
        margin:0;
        font-size:.8rem;
    }
</style>