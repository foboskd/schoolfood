<template>
    <!--текстовая зона на шорткарточке-->
    <div>
        <p class="pretexttextzone">Необязательно</p>
        <textarea  class="textarea"></textarea>
    </div>
</template>

<script>
    export default {
        name: "TextZone"
    }
</script>

<style scoped>
    /*текстовая зона на шорткарточке*/
    .pretexttextzone{
        margin-bottom: 1.5rem;
        font-size:.8rem;
        text-align:center;
    }

    .textarea{
        box-sizing:border-box;
        border:none;
        border-radius:.57rem;
        background-color:#F0F0F0;
        width:15rem;
        height:10rem;
        padding:.5rem;

    }
</style>