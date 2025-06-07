<template>
    <div class="p-6">
        <h1 class="text-2xl font-bold mb-4">Daftar Anggota</h1>

        <!-- Tombol Tambah -->
        <button
            @click="showModal = true"
            class="bg-blue-500 text-white px-4 py-2 rounded mb-4 hover:bg-blue-600"
        >
            Tambah Anggota
        </button>

        <!-- Tabel Anggota -->
        <table class="table-auto w-full border">
            <thead>
                <tr class="bg-gray-100">
                    <th class="border px-4 py-2">#</th>
                    <th class="border px-4 py-2">Nama</th>
                    <th class="border px-4 py-2">Alamat</th>
                    <th class="border px-4 py-2">No. HP</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="(item, index) in anggota" :key="item.id">
                    <td class="border px-4 py-2">{{ index + 1 }}</td>
                    <td class="border px-4 py-2">{{ item.nama }}</td>
                    <td class="border px-4 py-2">{{ item.alamat }}</td>
                    <td class="border px-4 py-2">{{ item.no_hp }}</td>
                </tr>
            </tbody>
        </table>

        <!-- Modal Form -->
        <div
            v-if="showModal"
            class="fixed inset-0 bg-black bg-opacity-40 flex items-center justify-center z-50"
        >
            <div class="bg-white p-6 rounded-lg shadow-md w-full max-w-md">
                <h2 class="text-xl font-semibold mb-4">Tambah Anggota</h2>
                <form @submit.prevent="submitForm">
                    <div class="mb-4">
                        <label class="block mb-1">Nama</label>
                        <input
                            v-model="form.nama"
                            type="text"
                            class="w-full border rounded px-3 py-2"
                            required
                        />
                    </div>
                    <div class="mb-4">
                        <label class="block mb-1">Alamat</label>
                        <input
                            v-model="form.alamat"
                            type="text"
                            class="w-full border rounded px-3 py-2"
                            required
                        />
                    </div>
                    <div class="mb-4">
                        <label class="block mb-1">No. HP</label>
                        <input
                            v-model="form.no_hp"
                            type="text"
                            class="w-full border rounded px-3 py-2"
                            required
                        />
                    </div>
                    <div class="flex justify-end gap-2">
                        <button
                            type="button"
                            @click="showModal = false"
                            class="px-4 py-2 bg-gray-300 rounded hover:bg-gray-400"
                        >
                            Batal
                        </button>
                        <button
                            type="submit"
                            class="px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600"
                        >
                            Simpan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script setup>
import { ref } from "vue";
import { router } from "@inertiajs/vue3";

defineProps({
    anggota: Array,
});

const showModal = ref(false);

const form = ref({
    nama: "",
    alamat: "",
    no_hp: "",
});

const submitForm = () => {
    router.post("/anggota", form.value, {
        onSuccess: () => {
            showModal.value = false;
            form.value = { nama: "", alamat: "", no_hp: "" };
        },
    });
};
</script>
