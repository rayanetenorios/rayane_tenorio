<script setup>
import { Link }  from '@inertiajs/inertia-vue3';

defineProps({
    data: {
        type: Object,
        default: () => ({}),
    },
});
</script>
<template>
    <div class="flex justify-center w-full flex-wrap text-lilas mt-4 space-x-2">
        <Link
            v-for="(link, k) in data.meta.links"
            :key="k"
            class="px-3 py-2 text-sm mb-2 leading-4 bg-lilas rounded hover:bg-lilas text-roxo focus:text-roxo hover:shadow"
            :class="{'bg-roxo text-lilas border border-lilas': link.active}"
            :href="link.url"
            v-html="link.label"
        />
    </div>
</template>