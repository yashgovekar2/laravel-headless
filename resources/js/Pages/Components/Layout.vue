<template>
    <div>
        <Header/>
        <slot/>
        <Footer/>
    </div>
</template>

<script setup>
import Header from "@/Pages/Components/Header.vue";
import Footer from "@/Pages/Components/Footer.vue";
</script>

<style scoped>

</style>
