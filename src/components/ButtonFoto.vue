<template>
    <!--Кнопки сделать фото внутри шорткарточки-->
    <div class="button_zone">

        <img v-if="tmpImage == null" src="../../public/media/img/backgroundimages/placeholderFoto.svg" class="placeholderFoto">
        <img v-else class="placeholderFoto" v-bind:src="`http://formconstructor.ru//${tmpImage}`">
        <label for="fotofile" class="fotoadd">
            <img src="../../public/media/img/galery.svg">&nbsp;Сделать или добавить фото
        </label>
        <input type="file" id="fotofile" class="fotofile" @change="onFileSelected" multiple />


    </div>
</template>

<script>
    import axios from 'axios';
    //import {eventBus} from '../main';
    export default {
        props: ['testParam'],
        name: "ButtonFoto",
        data(){
            return{
                selectedFile: null,
                tmpImage: null

            }
        },
        methods:{
            onFileSelected(event){
                this.selectedFile = event.target.files[0];

                const fileData = new FormData();
                fileData.append('image', this.selectedFile, this.selectedFile.name);

                console.log(fileData);
                //ip поставлен в настройках openserver
                axios.post('http://formconstructor.ru/query.php', fileData, {
                    headers:{
                        'Content-Type': 'multipart/form-data'
                    }
                })
                .then(res => {
                    this.tmpImage = res.data
                    localStorage.setItem('fotAdds', this.tmpImage);
                })


                /*eventBus.$emit('ButtonFoto', {tmpImage:this.tmpImage})*/
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
        margin-top:1rem;
    }

    .pretext{
        margin:0;
        font-size:.8rem;
    }

    .fotofile{
        visibility:hidden;
    }

    .placeholderFoto{
        width:10rem;
        height:10rem;

    }
</style>