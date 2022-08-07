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
                <BreezeNavLink :href="route('dashboard')" :active="route().current('dashboard')">
                    Projetos
                </BreezeNavLink>
                <BreezeNavLink :href="route('dashboard')" :active="route().current('dashboard')">
                    Blog
                </BreezeNavLink>
            </div>
        </nav>
    </header>
</template>
