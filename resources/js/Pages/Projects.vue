<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';
import SiteLayout from '@/Layouts/Site.vue';
import BlocoRepositorio from '@/Components/BlocoRepositorio.vue';

</script>

<template>
    <SiteLayout>
        <Head title="Projetos" />
        <div class="h-full max-w-screen-lg md:flex mx-auto overflow-x-hidden flex-col max-w-3xl px-4 mx-auto sm:px-6 xl:max-w-5xl xl:px-0">
            <div class="pt-6 pb-8 space-y-2 md:space-y-5">
                <h1 class="text-3xl font-extrabold leading-9 tracking-tight text-gray-900 dark:text-gray-100 sm:text-4xl sm:leading-10 md:text-6xl md:leading-14">
                    Projetos
                </h1>
                <p class="text-lg leading-7 text-gray-500 dark:text-gray-400">
                    Projetos e estudos que desenvolvi e estão disponíveis no Github.
                </p>
            </div>
            <main class="relative mb-auto scrollbar overflow-y-auto overflow-x-hidden lg:pr-3">
                <div class="w-fit">
                    <div class="container py-12">
                        <div class="flex flex-wrap -m-4">
                           <BlocoRepositorio   
                                v-for="(repositorio, key) in repositorios"
                                :key="key"
                                :repositorio="repositorio">
                            </BlocoRepositorio>
                        </div>
                    </div>
                </div>
            </main>
        </div>
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
</style>
<script>
    export default {
        props: {
            repositorios: Array
        }
    }
</script>

