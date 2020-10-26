<template>
    <!--Кнопки сделать фото внутри шорткарточки-->
    <div class="button_zone">
        <label for="fotofile" class="fotoadd">
            <img src="../../public/media/img/galery.svg">&nbsp;Сделать или добавить фото
        </label>
        <input type="file" id="fotofile" class="fotofile" @change="onFileSelected" multiple />

    </div>
</template>

<script>
    export default {
        props: ['testParam'],
        name: "ButtonFoto",
        data(){
            return{
                selectedFile: null
            }
        },
        methods:{
            onFileSelected(event){
                localStorage.selectedFile = event.target.files[0].name;
                console.log(localStorage.selectedFile);
            }
        }
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
        font-size:.9rem;
    }

    .pretext{
        margin:0;
        font-size:.8rem;
    }

    .fotofile{
        visibility:hidden;
    }
</style>