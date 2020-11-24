<template>
    <div id="app">
        <transition name="fade" mode="out-in">
            <!--<router-view v-if="getSchool"></router-view>-->

            <!--<loading v-else-if="getSchool === null"/>-->
            <loading/>

            <!--<not-found404 v-else-if="getSchool === undefined"/>-->
        </transition>
    </div>
</template>

<script>
    import NotFound404 from "./views/NotFound404";
    import Loading from "./views/Loading";

    export default {
        name: 'App',
        components: {Loading, NotFound404},
        data() {
            return {
                test: null
            }
        },
        mounted() {
            this.$store.dispatch('requestSchool', this.$route.params.school_uuid);
            if (localStorage.selectedFile) {
                this.test = localStorage.selectedFile;
            }
        },
        computed: {
            getSchool() {
                return this.$store.getters.getSchool;
            }
        }
    }

</script>

<style>

    #app {

    }

    .center__message {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .fade-enter-active, .fade-leave-active {
        transition: opacity .35s;
    }

    .fade-enter, .fade-leave-to {
        opacity: 0;
    }

</style>
