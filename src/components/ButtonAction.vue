<template>
    <!--кнопка далее-->
    <article class="actionbutton_container">
        <div class="wrapper_button">
            <button class="action_button" @click="$router.push(`${button.link}`)">{{button.buttonTitle}}</button>
        </div>
    </article>
</template>

<script>
    export default {
        props:['button'],
        name: "ButtonAction"
    }
</script>

<style scoped>
    /*кнопка далее*/
    .wrapper_button{
        margin:0 auto;
        max-width:18rem;
    }

    .actionbutton_container{
        max-width:18rem;
        width:100%;
        margin:0 auto;
    }

    .action_button{
        width:100%;
        background-color: #FF5F33;
        border-radius: .6rem;
        border:0px;
        height:3.25rem;
        color:#fff;
        font-size:1.1rem;
        font-weight:500;
        font-family:ptrootui;
    }
</style>