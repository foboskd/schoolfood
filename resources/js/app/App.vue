<template>
    <div id="app">
        <router-view></router-view>
    </div>
</template>

<script>
    export default {
        name: 'App',
        components: {},
        data() {
            return {
                test: null
            }
        },
        mounted() {
            if (localStorage.selectedFile) {
                this.test = localStorage.selectedFile;
            }
        }
    }

</script>

<style>
    #app {
    }
</style>
