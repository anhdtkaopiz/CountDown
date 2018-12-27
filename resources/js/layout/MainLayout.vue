<template>
    <div>
        <div>
            mainlayout
            <main>
                <router-view :key="$route.fullPath"></router-view>
            </main>
        </div>
    </div>
</template>

<script>
    export default {
        name: "MainLayout"
    }
</script>

<style scoped>

</style>