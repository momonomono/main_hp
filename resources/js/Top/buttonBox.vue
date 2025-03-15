<template>
    <article class="p-gird__box">
        <button 
            @click="clickCountUpTime"
            class="p-button__form c-button__main u-mb-2"
        >START</button>
        <button 
            @click="pauseCountUp"
            class="p-button__form c-button__main u-mb-2"
        >PAUSE</button>
        <button 
            @click="resumeCountUp"
            class="p-button__form c-button__main u-mb-2"
        >RESTART</button>
    </article>
</template>

<script>
    export default{
        methods:{
            clickCountTime(){
                this.$emit("onClickStart");
            },
            onClickPause(){
                this.$emit("pauseCountUp");
            },
            oneClickResume(){
                this.$emit("resumeCountUp");
            }
        }
    }
</script>