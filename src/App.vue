<template>
        <router-view />
        <ProgressPoint>
        </ProgressPoint>
        <ButtonAction>
        </ButtonAction>
</template>

<script>
import ProgressPoint from './components/ProgressPoint.vue'
import ButtonAction from './components/ButtonAction.vue'

export default {
  name: 'App',
  components: {
       ProgressPoint, ButtonAction
  }
}

</script>

<style>
#app {

}
</style>
