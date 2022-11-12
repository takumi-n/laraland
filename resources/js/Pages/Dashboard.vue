<script setup>
import PrimaryButton from "@/Components/PrimaryButton.vue";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Inertia } from "@inertiajs/inertia";
import { Head, Link } from "@inertiajs/inertia-vue3";

const props = defineProps({
    courses: Array,
});

const quit = (id) => {
    Inertia.post(route("quitCourse", id));
};
</script>

<template>
    <Head title="ダッシュボード" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                ダッシュボード
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <div
                            v-for="course in courses"
                            class="flex items-center mb-2 justify-between border-b p-2"
                            v-if="courses.length > 0"
                        >
                            <div>{{ course.name }}</div>
                            <form @submit.prevent="quit(course.id)">
                                <button
                                    class="text-red-600 underline-offset-4 underline"
                                >
                                    受講を停止する
                                </button>
                            </form>
                        </div>
                        <div v-else>
                            コースを受講しよう！
                            <Link
                                :href="route('courses')"
                                class="text-blue-500 underline"
                                >コース一覧</Link
                            >
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
