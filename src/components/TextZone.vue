<template>
    <!--текстовая зона на шорткарточке-->
    <div class="textareaWrapper">
        <!--<p class="pretexttextzone">Необязательно</p>-->
        <textarea  class="textarea" v-model="textZoneDescription" @change="getTextOnTextZone"></textarea>
    </div>
</template>

<script>
    //import {eventBus} from "../main";

    export default {
        name: "TextZone",
        data(){
            return {
                textZoneDescription: null,
                textBus: null
            }
        },
        methods:{
            getTextOnTextZone(){
                /*eventBus.$emit('TextZone', {textBus: this.textZoneDescription});*/
                localStorage.setItem('textZoneDescription', this.textZoneDescription);
            }
        }
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