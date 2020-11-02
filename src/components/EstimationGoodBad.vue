<template>
    <div class="estimationWrapBadGood">
        <fieldset class="goodBadEstimation">
            <label class="estimationWrapperPoint">
                <img :src="require('../../public/media/img/' + pathImageBad)" class="badEstimation">
                <input type="radio" name="estimationWrapperPoint" class="radioEstimation" aria-label="Плохо" @change="getEstimation" value="-1">
            </label>
            <label class="estimationWrapperPoint">
                <img :src="require('../../public/media/img/' + pathImageGood)" class="goodEstimation">
                <input type="radio" name="estimationWrapperPoint" class="radioEstimation" aria-label="Классно" @change="getEstimation" value="1">
            </label>
        </fieldset>
        <div class="textAnswer">
            <p>
                {{addFirstString}}<br>
                <strong>{{addSecondString}}</strong>
            </p>
        </div>
    </div>
</template>

<script>
    export default {
        name: "EstimationGoodBad",
        data(){
          return{
              pathImageBad: "badestimationgrey.svg",
              pathImageGood: "goodestimationgrey.svg",
              addFirstString: "Ожидаем",
              addSecondString: "Вашу оценку"
          }
        },
        methods:{
            getEstimation(event){
                if (event.target.value == 1){
                    this.pathImageGood = "goodestimationcolor.svg";
                    this.pathImageBad = "badestimationgrey.svg";
                    this.addFirstString = "Вы поставили";
                    this.addSecondString = "положительную оценку";
                    localStorage.setItem('countEstimation', event.target.value)
                }
                else{
                    this.pathImageGood = "goodestimationgrey.svg";
                    this.pathImageBad = "badestimationcolor.svg";
                    this.addFirstString = "Вы поставили";
                    this.addSecondString = "отрицательную оценку";
                    localStorage.setItem('countEstimation', event.target.value)
                }

            }
        }
    }
</script>

<style scoped>

    .goodBadEstimation{
        width:12.5rem;
        display:flex;
        justify-content:space-between;
        padding:0;
        margin:0;
        border:none;
    }
    .estimationWrapperPoint{
        display:flex;
        flex-direction:column
    }
    .radioEstimation{
        visibility:hidden;
    }

    .textAnswer{
        padding-top:.5rem;
        color:#4F4F4F;
    }

    .textAnswer p{
        margin:0;
        min-height:1rem;
        text-align:center;
    }
</style>