<template>
    <!--Кнопки сделать фото внутри шорткарточки-->
    <div class="button_zone">
        <label for="fotofile">
            <!--<img v-if="tmpImage == null" src="../../public/media/img/backgroundimages/placeholderFoto.svg" class="placeholderFoto">-->
            <!--<img v-else class="placeholderFoto" v-bind:src="`http://188.127.230.228/${tmpImage['path']}`">-->
        </label>
        <label for="fotofile" class="fotoadd">
            <!--<img src="../../public/media/img/galery.svg">&nbsp;Сделать или добавить фото-->
        </label>
        <input type="file" id="fotofile" name="fotofile" class="fotofile" @change="onFileSelected" multiple />


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
                fileData.append('access', 'testtext');

                //console.log(fileData);
                //ip поставлен так как на серваке нет пока что домена
                axios.post('http://188.127.230.228/backend/queryRout.php', fileData, {
                    headers:{
                        'Content-Type': 'multipart/form-data'
                    }
                })
                .then(res => {
                    this.tmpImage = res.data;
                    //console.log(this.tmpImage['path']);
                    localStorage.setItem('fotAdds', this.tmpImage['path']);
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
        min-height:10rem;

    }
</style>