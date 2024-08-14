<template>
    <div>
        <div class="flex items-center mb-8">
            <h3 class="text-xl mr-4">Разделы</h3>
            <Link :href="route('sections.create')" class="block w-1/6 mr-4 bg-white border-gray-300 rounded-lg text-center px-2 py-1">+ Раздел</Link>
            <Link :href="route('branches.create')" class="block w-1/6 bg-white border-gray-300 rounded-lg text-center px-2 py-1">+ Ветка</Link>
        </div>
        <div v-if="sections">
            <div v-for="section in sections" class="mb-8">
                <div v-if="section.branches.length">
                    <div class="mb-4">
                        <h3 class="text-lg">{{ section.title }}</h3>
                    </div>
                    <div v-for="branch in section.branches">
                        <Link :href="route('branches.show', branch.id)" class="block bg-white p-4 border border-gray-300">
                            <h3>{{ branch.title }}</h3>
                        </Link>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import MainLayot from '@/Layouts/MainLayot.vue'
import { Link } from '@inertiajs/vue3';
    export default {
        name: "Index",

        props: [
            'sections'
        ],

        components: {
            Link
        },

        layout: MainLayot
    }
</script>

<style scoped>

</style>
