<template>
    <AdminLayout>
        <h2 class="text-2xl font-semibold mb-4">Data Siswa</h2>
        <table class="w-full table-auto border">
            <thead class="bg-gray-200">
                <tr>
                    <th class="p-2 border">#</th>
                    <th class="p-2 border">Nama</th>
                    <th class="p-2 border">Kelas</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="(siswa, i) in siswaList" :key="i">
                    <td class="p-2 border">{{ i + 1 }}</td>
                    <td class="p-2 border">{{ siswa.nama }}</td>
                    <td class="p-2 border">{{ siswa.kelas }}</td>
                </tr>
            </tbody>
        </table>
    </AdminLayout>
</template>

<script setup>
import AdminLayout from "../Layouts/AdminLayout.vue";

const siswaList = [
    { nama: "Ahmad", kelas: "X RPL 1" },
    { nama: "Budi", kelas: "XI TKJ 2" },
    { nama: "Citra", kelas: "XII MM 3" },
];
</script>
