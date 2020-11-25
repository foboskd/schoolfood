<template>
    <div class="button_zone">
        <label for="fotofile">
            <img :src="getFile"
                 class="placeholderFoto">
        </label>
        <label for="fotofile" class="fotoadd">
            <img src="/media/img/galery.svg">
            &nbsp;Сделать или добавить фото
        </label>
        <input type="file" ref="fotofile" id="fotofile" name="fotofile" class="fotofile" @change="onFileSelected" multiple/>
    </div>
</template>

<script>


    export default {
        name: "ButtonPhoto",
        data() {
            return {
                selectedFile: null,
                tmpImage: null
            }
        },
        methods: {
            onFileSelected(event) {
                let reader = new FileReader();

                this.$store.commit('setFile', this.$refs.fotofile.files[0]);

                reader.onload = () => {
                    this.$store.commit('setFile', reader.result);
                };

                reader.readAsDataURL(event.target.files[0]);
            },
        },
        computed: {
            getFile() {
                let storeFile = this.$store.getters.getFile;

                return storeFile ? storeFile : "/media/img/backgroundimages/placeholderFoto.svg";
            }
        },
    }
</script>

<style scoped>
    /*Кнопки сделать фото внутри шорткарточки*/
    .button_zone {
        display: flex;
        flex-direction: column;
        width: 100%;
        height: 100%;
        justify-content: flex-end;
        align-items: center;

    }

    .fotoadd {
        width: 15rem;
        height: 3rem;
        border: none;
        border-radius: .57rem;
        background-color: #F0F0F0;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: row;
        font-size: .9rem;
        margin-top: 1rem;
    }

    .pretext {
        margin: 0;
        font-size: .8rem;
    }

    .fotofile {
        visibility: hidden;
    }

    .placeholderFoto {
        width: 10rem;
        min-height: 10rem;
        object-fit: contain;
        object-position: center;
    }
</style>