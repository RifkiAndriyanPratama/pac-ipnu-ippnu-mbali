<template>
    <header
        class="bg-white border-b px-6 py-4 flex justify-between items-center shadow-md sticky top-0 z-10"
    >
        <div class="flex items-center gap-4">
            <button class="md:hidden" @click="$emit('toggleSidebar')">
                <svg
                    class="w-6 h-6 text-gray-700"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M4 6h16M4 12h16M4 18h16"
                    />
                </svg>
            </button>
            <h1 class="text-xl font-bold text-gray-800">Dashboard</h1>
        </div>
        <a href="/logout" class="text-green-600 hover:underline">Logout</a>
    </header>
</template>
