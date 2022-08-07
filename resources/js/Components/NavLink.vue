<script setup>
import { computed } from 'vue';
import { Link } from '@inertiajs/inertia-vue3';
import theme from 'tailwindcss/defaultTheme.js';

const props = defineProps(['href', 'active']);

const classes = computed(() => props.active
    ? 'block md:inline-block px-4 py-3 no-underline text-roxo font-hitmoblack text-lg md:text-2xl bg-lilas'
    : 'block md:inline-block px-4 py-3 no-underline text-lilas hover:text-rosaEscuro font-hitmobold text-lg md:text-2xl'
);
</script>

<template>
    <Link :href="href" :class="classes">
        <slot />
    </Link>
</template>
<style>

</style>
