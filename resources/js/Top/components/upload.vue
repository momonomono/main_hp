<template>
    <article class="c-gird__upload"
        :style="{ backgroundImage: `url(${showFileUrl})` }"
        >
        <p>ここにアップロードしてください</p>
        <input  
            type="file" 
            class="p-form__upload" 
            @change="changeFile"
        >
    </article>
</template>

<script>
    export default{
        data: function(){
            return {
                fileUrl: null
            }
        },
        computed:{
            showFileUrl(){
                return this.fileUrl ? this.fileUrl : ""
            }
        },
        methods :{
            changeFile(){
                const file = document.querySelector('.p-form__upload').files[0];
                if(file && file.type.startsWith('image/')){
                    const reader = new FileReader();
                    reader.onload = (e) => {
                        this.fileUrl = e.target.result;
                        console.log(e.target.result);
                    };
                    reader.readAsDataURL(file);
                }
            }
        }
    }
</script>