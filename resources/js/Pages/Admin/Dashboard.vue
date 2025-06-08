<template>
    <AdminDashboard>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
            <InfoCard title="Total Anggota" value="1240">
                <template #icon>
                    <svg
                        class="w-6 h-6"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                    >
                        <path d="M12 14l9-5-9-5-9 5 9 5z" />
                        <path
                            d="M12 14l6.16-3.422A12.083 12.083 0 0112 21a12.083 12.083 0 01-6.16-10.422L12 14z"
                        />
                    </svg>
                </template>
            </InfoCard>

            <InfoCard title="Pengurus" value="64">
                <template #icon>
                    <svg
                        class="w-6 h-6"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                    >
                        <path
                            d="M5.121 17.804A10.978 10.978 0 0012 21a10.978 10.978 0 006.879-3.196M15 10a3 3 0 10-6 0 3 3 0 006 0z"
                        />
                    </svg>
                </template>
            </InfoCard>

            <!-- Tambah InfoCard lainnya -->
        </div>

        <ChartSection />
    </AdminDashboard>
</template>

<script setup>
import AdminDashboard from "../../Layouts/AdminLayout.vue";
import InfoCard from "../../Components/InfoCard.vue";
import ChartSection from "../../Components/ChartSection.vue";
</script>
