<template>
    <div class="container">

        <transition name="slide" mode="out-in">
            <back-button v-if="getProgress.current !== 0"/>
        </transition>

        <up-line-text/>

        <router-view></router-view>

        <progress-point/>

        <button-action/>
    </div>
</template>

<script>

    import BackButton from "../components/BackButton";
    import UpLineText from "../components/UpLineText";
    import ButtonAction from "../components/ButtonAction";
    import ProgressPoint from "../components/ProgressPoint";

    export default {
        name: "Review",
        computed: {
            getProgress() {
                return this.$store.getters.getProgress;
            }
        },
        components: {ProgressPoint, ButtonAction, UpLineText, BackButton}
    }

</script>

<style scoped>

    .container {
        max-width: 18rem;
        margin: auto;
    }

</style>