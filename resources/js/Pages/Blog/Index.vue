<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';
import SiteLayout from '@/Layouts/Site.vue';
import PhpLogo from '@/Components/Icons/PhpLogo.vue';
import ChapeuFormatura from '@/Components/Icons/ChapeuFormatura.vue';
import Casa from '@/Components/Icons/Casa.vue';

</script>

<template>
    <SiteLayout>
        <Head title="Home" />
        <main class="h-full flex justify-center items-center max-w-screen-lg md:flex mx-auto scrollbar overflow-y-auto">
            <h1 class="text-3xl font-extrabold leading-9 tracking-tight sm:text-4xl sm:leading-10 md:text-6xl md:leading-14">
                Em breve!
            </h1>
        </main>
    </SiteLayout>
</template>

<style>
    html {
        background-color: var(--roxo);
        color: var(--lilas);
    }
    .infos svg {
        fill: var(--roxo);
        stroke: var(--lilas);
    }
    .github svg {
        fill: var(--lilas);
        stroke: var(--lilas);
    }
    .scrollbar::-webkit-scrollbar {
        width: 10px;
        height: 20px;
    }
    .scrollbar::-webkit-scrollbar-track {
        border-radius: 100vh;
        background: var(--rosaEscuro);
    }

    .scrollbar::-webkit-scrollbar-thumb {
        background: var(--roxo);
        border-radius: 100vh;
        border: 2px solid var(--lilas);
    }

    .scrollbar::-webkit-scrollbar-thumb:hover {
        background: var(--roxo);
    }
</style>
<script>
    export default {
        props: {
            
        }
    }
</script>

