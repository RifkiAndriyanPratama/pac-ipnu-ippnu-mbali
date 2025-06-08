<template>
    <div class="flex h-screen overflow-hidden relative">
        <Sidebar
            :class="{
                // Kelas dasar yang selalu ada
                'fixed md:static top-0 left-0 h-full w-64 bg-gray-900 text-white z-30 p-4 transform': true,
                // Kontrol visibilitas di mobile
                '-translate-x-full md:translate-x-0': !showSidebar, // Sembunyikan dengan translateX di mobile
                'translate-x-0': showSidebar, // Tampilkan dengan translateX di mobile
                // Kelas untuk desktop (selalu terlihat dan statis)
                'md:block': true, // Pastikan selalu block di md dan di atasnya
            }"
        />

        <div
            v-if="showSidebar"
            class="fixed inset-0 bg-black bg-opacity-50 z-20 md:hidden"
            @click="showSidebar = false"
        />

        <div class="flex-1 flex flex-col overflow-hidden">
            <Navbar @toggleSidebar="showSidebar = !showSidebar" />
            <main class="p-6 overflow-auto flex-1 bg-gray-50">
                <slot />
            </main>
        </div>
    </div>
</template>

<script setup>
import { ref } from "vue";
import Sidebar from "../Components/Sidebar.vue";
import Navbar from "../Components/Navbar.vue";

const showSidebar = ref(false);
</script>
