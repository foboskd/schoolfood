<template>
    <article class="action-button_container" v-if="getButtonAction">
        <router-link :to="getButtonAction.link" append>
            <button class="action_button" :disabled="getButtonAction.isDisabled">
                {{ getButtonAction.title }}
            </button>
        </router-link>


        <!--<div class="wrapper_button" v-if="button.attributeStyleDisable == true">
            <router-link :to="`${button.link}`">
                <button disabled class="action_button">{{button.buttonTitle}}</button>
            </router-link>
        </div>

        <div class="wrapper_button" v-else-if="button.attributeStyleDisable == false">
            <router-link :to="`${button.link}`">
                <button class="action_button" @click="animEvent">{{button.buttonTitle}}</button>
            </router-link>
        </div>

        <div class="wrapper_button" v-else-if="!button.attributeStyleDisable">
            &lt;!&ndash;<button class="action_button" @click="$router.push(`${button.link}`)">{{button.buttonTitle}}</button> сохранил на будещее тут альтернативная запись роутералинк в виде роутерпуш в онклике&ndash;&gt;
            <router-link :to="`${button.link}`">
                <button class="action_button" @click="animEvent">{{button.buttonTitle}}</button>
            </router-link>
        </div>-->
    </article>
</template>

<script>

    import {eventBus} from "../main";

    export default {
        name: "ButtonAction",
        computed: {
            getButtonAction() {
                return this.$store.getters.getButtonAction;
            }
        },
        methods: {
            animEvent() {
                this.fadeCart = false;
                eventBus.$emit('animEvent', {animFadeCart: this.fadeCart})
            }
        }
    }
</script>

<style scoped>

    .wrapper_button {
        margin: 0 auto;
        max-width: 18rem;
    }

    .action-button_container {
        max-width: 18rem;
        width: 100%;
        margin: 0 auto;
    }

    .action_button {
        width: 100%;
        background-color: #FF5F33;
        border-radius: .6rem;
        border: 0px;
        height: 3.25rem;
        color: #fff;
        font-size: 1.1rem;
        font-weight: 500;
        font-family: ptrootui;
    }

    .action_button:disabled {
        background-color: #adacac;
        color: black;
    }

</style>