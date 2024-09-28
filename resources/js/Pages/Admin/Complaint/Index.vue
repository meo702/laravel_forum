<template>
    <div>
        <div class="flex items-center mb-4">
            <h3 class="text-xl mr-4">Жалобы</h3>
        </div>
        <div>
            <div class="border border-gray-200 rounded-lg">
                <table class="text-center text-medium">
                    <thead class="w-full bg-gray-100">
                        <tr class="text-gray-700">
                            <th class="p-3">ID</th>
                            <th class="p-3">Текст</th>
                            <th class="p-3">Пользователь</th>
                            <th class="p-3">Сообщение</th>
                            <th class="p-3">Статус</th>
                            <th class="p-3">Действие</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="complaint in complaints" class="text-gray-500">
                            <td class="p-3">{{ complaint.id }}</td>
                            <td class="p-3">{{ complaint.body }}</td>
                            <td class="p-3">{{ complaint.user.name }}</td>
                            <td class="p-3">{{ complaint.message_id }}</td>
                            <td class="p-3">{{ complaint.is_solved }}</td>
                            <td class="p-3"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>

<script>
import AdminLayout from '@/Layouts/AdminLayout.vue';
import { Link } from '@inertiajs/vue3';
    export default {
        name: "Index",

        props: [
            'complaints'
        ],

        components: {
            Link
        },

        layout: AdminLayout
    }
</script>

<style scoped>

</style>
