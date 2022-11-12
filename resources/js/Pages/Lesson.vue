<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head, Link } from "@inertiajs/inertia-vue3";

const props = defineProps({
    material: String,
    lesson: Object,
});
</script>

<template>
    <Head title="コース一覧" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ lesson.title }}
                <span class="ml-2 text-sm text-gray-500">{{
                    lesson.required_time
                }}</span>
            </h2>
        </template>

        <div class="py-6">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mb-2">
                <div class="mb-2 text-blue-500 underline">
                    <Link :href="route('showCourse', lesson.course_id)">
                        コースへ戻る
                    </Link>
                </div>
                <div
                    class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6"
                >
                    <div v-html="material"></div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<style scoped>
::v-deep h1 {
    font-size: 2rem;
    font-weight: 700;
    margin-bottom: 1rem;
}

::v-deep h2 {
    font-size: 1.5rem;
    font-weight: 700;
    margin-bottom: 1rem;
}

::v-deep ul {
    @apply list-disc box-border;
}
</style>
