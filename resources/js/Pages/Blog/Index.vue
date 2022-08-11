<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';
import SiteLayout from '@/Layouts/Site.vue';
import BlocoArtigo from '@/Components/Blog/BlocoArtigo.vue';
import Pagination from '@/Components/Blog/Pagination.vue';

const props = defineProps({
    articles: {
        type: Object,
        default: () => ({}),
    },
});

</script>

<template>
    <SiteLayout>
        <Head title="Home" />
        <main class="h-full max-w-screen-lg flex justify-center pt-20 flex-col items-center mx-auto scrollbar overflow-y-auto p-5">
            <div class="pt-16 pb-9 sm:pb-16 sm:text-center">
                <h1 class="mb-4 text-8xl sm:text-4xl tracking-tight text-slate-800 font-extrabold dark:text-slate-200">
                    Blog
                </h1>
                <h2 class="text-lg text-slate-700 dark:text-slate-400">
                    Postagens sobre programação, estudos e vida.
                </h2>
            </div>
            <div class="space-y-16 h-full mx-auto max-w-full max-w-7xl">
                <BlocoArtigo 
                    v-for="article in articles.data"
                    :key="article.id"
                    :article="article">
                </BlocoArtigo>
                <div class="w-full">
                    <Pagination :data="articles" />
                </div>
            </div>
        </main>
    </SiteLayout>
</template>
<style>
    html {
        background-color: var(--roxo);
        color: var(--lilas);
    }
</style>

