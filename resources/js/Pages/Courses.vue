<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head } from "@inertiajs/inertia-vue3";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import { Link } from "@inertiajs/inertia-vue3";

const props = defineProps({
    courses: Array,
});
</script>

<template>
    <Head title="コース一覧" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                コース一覧
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <div
                            v-for="course in courses"
                            class="flex items-center mb-2 justify-between border-b p-2"
                        >
                            <div>
                                {{ course.name }}
                            </div>
                            <Link :href="route('showCourse', course.id)">
                                <PrimaryButton @click=""
                                    >詳細を見る</PrimaryButton
                                >
                            </Link>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
