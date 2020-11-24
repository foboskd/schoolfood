<template>
    <div class="container">

        <back-button v-if="$route.name !== 'ReviewIndex'"/>

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
        components: {ProgressPoint, ButtonAction, UpLineText, BackButton}
    }

</script>

<style scoped>

    .container {
        max-width: 18rem;
        margin: auto;
    }

</style>