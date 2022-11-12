<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head, Link } from "@inertiajs/inertia-vue3";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import { Inertia } from "@inertiajs/inertia";

const props = defineProps({
    course: Object,
    attended: Boolean,
    lessons: Array,
});

const submit = () => {
    Inertia.post(route("attendCourse", props.course.id));
};
</script>

<template>
    <Head title="コース一覧" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ course.name }}
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mb-2">
                <div
                    class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6"
                >
                    <div class="bg-white">
                        {{ course.description }}
                    </div>
                    <div class="flex justify-end">
                        <div v-if="attended" class="font-bold text-green-600">
                            受講しています
                        </div>
                        <form @submit.prevent="submit" v-else>
                            <PrimaryButton>登録する</PrimaryButton>
                        </form>
                    </div>
                </div>
            </div>

            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div
                    class="bg-white overflow-x-auto relative shadow-sm sm:rounded-lg p-6"
                >
                    <table
                        class="w-full text-sm text-left text-gray-500 table-auto"
                    >
                        <thead class="text-gray-700 bg-gray-50">
                            <tr>
                                <th scope="col" class="py-3 px-6">ステップ</th>
                                <th scope="col" class="py-3 px-6">タイトル</th>
                                <th scope="col" class="py-3 px-6">所要時間</th>
                                <th
                                    scope="col"
                                    class="py-3 px-6"
                                    v-if="attended"
                                ></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr
                                class="bg-white border-b"
                                v-for="lesson in lessons"
                            >
                                <th
                                    scope="row"
                                    class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap"
                                >
                                    {{ lesson.step_no }}
                                </th>
                                <td class="py-4 px-6">{{ lesson.title }}</td>
                                <td class="py-4 px-6">
                                    {{ lesson.required_time }}
                                </td>
                                <td v-if="attended">
                                    <Link
                                        :href="route('showLesson', lesson.id)"
                                    >
                                        <PrimaryButton>学習開始</PrimaryButton>
                                    </Link>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
