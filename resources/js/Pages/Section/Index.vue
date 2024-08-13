<template>
    <div>
        <div class="flex items-center">
            <h3 class="text-xl mr-4">Разделы</h3>
            <Link :href="route('sections.create')" class="block w-1/6 mr-4 bg-white border-gray-300 rounded-lg text-center px-2 py-1">+ Раздел</Link>
            <Link :href="route('branches.create')" class="block w-1/6 bg-white border-gray-300 rounded-lg text-center px-2 py-1">+ Ветка</Link>
        </div>
    </div>
</template>

<script>
import MainLayot from '@/Layouts/MainLayot.vue'
import { Link } from '@inertiajs/vue3';
    export default {
        name: "Index",

        components: {
            Link
        },

        layout: MainLayot
    }
</script>

<style scoped>

</style>
