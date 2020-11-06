<template>
    <!--кнопка далее-->
    <article class="actionbutton_container">
        <div class="wrapper_button" v-if="button.attributeStyleDisable == true">
            <button disabled class="action_button" @click="$router.push(`${button.link}`)">{{button.buttonTitle}}</button>
        </div>
        <div class="wrapper_button" v-else-if="button.attributeStyleDisable == false">
            <button class="action_button" @click="$router.push(`${button.link}`)">{{button.buttonTitle}}</button>
        </div>
        <div class="wrapper_button" v-else-if="!button.attributeStyleDisable">
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

    .action_button:disabled{
        background-color: #adacac;
        color:black;
    }
</style>