<template>
    <div
        class="bg-white rounded-xl shadow p-4 flex items-center gap-4 w-full hover:shadow-lg transition"
    >
        <div class="p-3 rounded-full bg-blue-100 text-blue-500">
            <slot name="icon" />
        </div>
        <div>
            <h3 class="text-gray-600 text-sm">{{ title }}</h3>
            <p class="text-xl font-semibold">{{ value }}</p>
        </div>
    </div>
</template>

<script setup>
defineProps({
    title: String,
    value: String,
});
</script>
