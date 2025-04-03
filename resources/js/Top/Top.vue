<template>
    <article class=" u-mt-3">
        <form method="post">
            <Upload />
        </form>
    </article>
</template>

<script>
    import Upload from "./components/upload.vue"

    export default{
        components: {
            Upload
        }
    }
</script>