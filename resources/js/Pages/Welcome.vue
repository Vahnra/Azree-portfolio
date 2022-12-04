<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';
import logo from '@/Components/Logo.vue';
import images from '@/Components/Images.vue'

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
});

</script>

<style>
body {
   background-color: #F3F4F6; 
}

h1 {
    font-size: 200%;
    margin-left: 10vw;
    margin-top: 20vh;
}

</style>

<template>
    <Head title="Bienvenue" />

    <!-- <div class="">
        <div v-if="canLogin" class="">
            <Link
                v-if="$page.props.auth.user"
                :href="route('dashboard')"
                class=""
                >Dashboard</Link
            >

            <template v-else>
                <Link :href="route('login')" class="">Log in</Link>

            </template>
        </div>

    </div> -->

    <div class="">
        <h1>
            <logo />
        </h1>

        <images />
    </div>
</template>
