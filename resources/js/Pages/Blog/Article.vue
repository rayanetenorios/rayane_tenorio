<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';
import SiteLayout from '@/Layouts/Site.vue';

const props = defineProps({
    article: {
        type: Object,
        default: () => ({}),
    },
});

</script>

<template>
    <SiteLayout>
        <Head title="Home" />
        <main class="h-full max-w-screen-lg flex justify-center flex-col items-center md:flex mx-auto scrollbar overflow-y-auto p-5">
            <article class="w-full h-full">
                <div class="pt-2 pb-9 sm:pb-16 sm:text-center">
                    <h1 class="mb-4 text-4xl sm:text-4xl tracking-tight text-slate-800 font-extrabold dark:text-slate-200">
                        {{ article.data.title }}
                    </h1>
                    <h2 class="text-lg text-slate-700 dark:text-slate-400">
                        {{ article.data.caption }}
                    </h2>
                    <span>Por: {{ article.data.record.name }}</span>
                </div>
                <div class="space-y-10 mx-auto flex items-center justify-center flex-col max-w-7xl">
                    <div class="w-full flex items-center justify-center">
                        <img class="max-h-80" :src="'../../../archives/img/' + article.data.image" alt="">
                    </div>
                    <p class="text-justify whitespace-pre-line flex flex-col items-center" v-html="article.data.text"></p>
                </div>
            </article>
        </main>
    </SiteLayout>
</template>

<style>
    html {
        background-color: var(--roxo);
        color: var(--lilas);
    }
</style>

