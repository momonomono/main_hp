<template>
    <div class="l-container">
        <article class="c-gird__main p-gird__form u-mt-10">
            <p class="p-text__count">
                {{ showTwoDigits(hour) }} : {{ showTwoDigits(minute) }} : {{ showTwoDigits(secound) }}
            </p>
        
        </article>
    </div>
</template>

<script>
    import ButtonBox from "./buttonBox.vue";

    export default{
        data :function(){
            return {
                total_time : 0,
                secound : 0,
                minute : 0,
                hour : 0,
                isIntervalId : null,
                isClick : false
            }
        },
        methods : {
            clickCountUpTime(){
                if(this.isIntervalId)return;
                this.countTime();
            },
            countTime(){
                this.isIntervalId = setInterval(()=>{

                    if(!this.isClick){
                        this.secound ++;
                        this.total_time ++;
                    }

                    if(this.secound > 59){
                        this.secound = 0;
                        this.minute ++;
                    }

                    if(this.minute > 59){
                        this.minute = 0;
                        this.hour ++;
                    }
                },1000);
            },
            pauseCountUp(){
                this.isClick = true;
            },
            resumeCountUp(){
                this.isClick = false;
            },
            showTwoDigits(val){
                return String(val).padStart(2,"0");
            }
        },
        components:{
            "ButtonBox" : ButtonBox
        }
    }
</script>