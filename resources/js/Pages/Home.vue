<template>
    <Layout>
        <div>
            <h1>{{ pageData.header }}</h1>
            <p>{{ pageData.description }}</p>
            <img :src="pageData.banner.link" :alt="pageData.banner.alt"/>
        </div>
    </Layout>
</template>

<script>
import Layout from "@/Pages/Components/Layout.vue";

export default {
    components: {Layout},
    props: {
        pageData: Object,
    }
}
</script>

<style scoped>

</style>
