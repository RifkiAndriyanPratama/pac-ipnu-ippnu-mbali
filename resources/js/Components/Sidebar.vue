<script setup>
import { HomeIcon, UsersIcon } from "@heroicons/vue/24/solid";
</script>

<template>
    <aside class="w-64 bg-gray-900 text-white h-full p-6 hidden md:block">
        <div class="mb-8 text-center">
            <img
                src="/images/logopac.png"
                alt="Logo PAC"
                class="h-24 w-auto mx-auto"
            />
        </div>

        <nav>
            <ul class="space-y-4">
                <li>
                    <a
                        href="/dashboard"
                        class="flex items-center space-x-3 hover:text-green-600"
                        ><HomeIcon class="h-5 w-5" /> <span>Dashboard</span></a
                    >
                </li>
                <li>
                    <a
                        href="/siswa"
                        class="flex items-center space-x-3 hover:text-green-600"
                        ><UsersIcon class="h-5 w-5" />
                        <span>Data Anggota</span></a
                    >
                </li>
            </ul>
        </nav>
    </aside>
</template>
