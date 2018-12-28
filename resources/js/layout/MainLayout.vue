<template>
        <div>
            <main>
                <router-view :key="$route.fullPath"></router-view>
            </main>
        </div>
</template>

<script>
    export default {
        name: "MainLayout"
    }
</script>

<style scoped>
    div{
        width: 100vw;
        height: 100vh;
        background-image: url("/image/tet2019.jpg");
        background-size: cover;
        background-attachment:fixed;
        background-position: center;
    }
</style>