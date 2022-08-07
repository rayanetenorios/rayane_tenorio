<script setup>
import { Link } from '@inertiajs/inertia-vue3';
import Header from '@/Layouts/_partials/Header.vue';
import Footer from '@/Layouts/_partials/Footer.vue';
</script>

<template>
    <div class="w-screen h-screen flex flex-col sm:justify-center items-center">
        <Logged v-if="$page.props.auth.user"/>
        <Header/>
        <div class="w-full h-full overflow-hidden">
            <slot />
        </div>
        <Footer/>
    </div>
</template>

