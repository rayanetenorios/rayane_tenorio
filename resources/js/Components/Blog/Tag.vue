<template>
    <span class="text-xs text-rosaEscuro py-1 px-2 rounded-md">
        {{ tag }}
    </span>
</template>
<script>
    export default {
        props: {
            tag: String,
        }
    }
</script>