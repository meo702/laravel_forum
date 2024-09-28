<template>
    <div>
        <div class="bg-white border-b border-gray-300 py-4">
            <div class="w-1/2 mx-auto">
                <Link :href="route('dashboard')" class="mr-4">Главная страница</Link>
                <Link :href="route('sections.index')" class="mr-4">Форум</Link>
                <Link :href="route('users.personal')">Личный кабинет</Link>
            </div>
        </div>

        <div class="w-1/2 flex mx-auto py-4">
            <!-- menu -->
            <div class="w-1/4 bg-white p-4 mr-4 border border-gray-300">
                <h3 class="text-xl mr-4">Меню</h3>

                <div class="py-4">
                    <div>
                        <Link :href="route('admin.main.index')" class="block w-full border-b border-gray-300">Статистика</Link>
                    </div>
                    <div>
                        <Link :href="route('admin.complaints.index')" class="block w-full border-b border-gray-300">Жалобы</Link>
                    </div>
                </div>
            </div>

            <div class="w-3/4 bg-white p-4 border border-gray-300">
                <slot />
            </div>
        </div>
    </div>
</template>

<script>
import { Link } from '@inertiajs/vue3';
    export default {
        name: "AdminLayout",

        components: {
            Link
        }
    }
</script>

<style scoped>

</style>
