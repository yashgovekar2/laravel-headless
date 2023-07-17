<template>
    <div>
        <h1>{{ pageData.header }}</h1>
        <p>{{ pageData.description }}</p>
        <img :src="pageData.banner.link" :alt="pageData.banner.alt" />
    </div>
</template>

<script>
export default {
    props: {
        pageData: Object,
    }
}
</script>

<style scoped>

</style>
