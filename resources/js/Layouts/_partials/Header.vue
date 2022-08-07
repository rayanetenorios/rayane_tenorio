<script setup>
import { ref } from 'vue';
import BreezeNavLink from '@/Components/NavLink.vue';

// const showingNavigationDropdown = ref(false);
</script>

<template>
    <header class="w-screen">
        <nav class="border-b border-lilas">
            <div class="flex justify-center">
                <BreezeNavLink :href="route('index')" :active="route().current('index')">
                    Home
                </BreezeNavLink>
                <BreezeNavLink :href="route('projects.index')" :active="route().current('projects.index')">
                    Projetos
                </BreezeNavLink>
                <BreezeNavLink :href="route('blog.index')" :active="route().current('blog.index')">
                    Blog
                </BreezeNavLink>
            </div>
        </nav>
    </header>
</template>
