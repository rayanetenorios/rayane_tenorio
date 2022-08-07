<script setup>
import { Link } from '@inertiajs/inertia-vue3';
import GithubLogo from '@/Components/Icons/GithubLogo.vue';


</script>

<template>
     <div class="p-4 md:w-1/2 md" style="max-width: 544px;" >
        <div class="h-full overflow-hidden border-2 border-gray-200 rounded-md border-opacity-60 dark:border-gray-700">
            <div class="p-6">
                <div class="flex flex-row justify-between items-center">
                    <div class="my-2">
                        <!-- svg -->
                    </div>
                    <div class="flex flex-row justify-between">
                        <!-- <div class="mx-1">
                            <Link
                            :href="repositorio.html_url"
                            class="text-sm text-gray-500 transition hover:text-gray-600"
                            target="_blank" 
                            >
                                <span class="sr-only"></span>
                                <GithubLogo />
                            </Link>
                        </div> -->
                        <div class="mx-1">
                            <Link
                            :href="repositorio.html_url"
                            class="github text-sm text-gray-500 transition hover:text-gray-600"
                            target="_blank" 
                            >
                                <span class="sr-only">github</span>
                                <GithubLogo />
                            </Link>
                        </div>
                    </div>
                </div>
                <h2 class="text-2xl font-bold leading-8 tracking-tight mb-3">
                    {{ repositorio.name }}
                </h2>
                <p class="prose text-gray-500 max-w-none dark:text-gray-400 mb-3">
                    {{ repositorio.description }}
                </p>
                <!-- <div class="flex flex-row justify-between">
                    <div class="text-gray-400 text-sm font-extralight">
                        Next • Markdown • TailwindCSS
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</template>
<style>
    .github svg {
        fill: var(--lilas);
        stroke: var(--lilas);
    }
</style>
<script>
    export default {
        props: {
            repositorio: Array,
        }
    }
</script>
