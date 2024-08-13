<template>
<div>
    <div class="flex items-center mb-4">
        <h3 class="text-xl mr-4">Добавить ветку</h3>
    </div>
    <div>
        <div class="mb-4" v-if="sections.length > 0">
            <select class="border-gray-300 p-2 w-1/4" v-model="section_id">
                <option value="null" selected disabled>Выберите раздел</option>
                <option v-for="section in sections" :value="section.id">{{ section.title }}</option>
            </select>
            <input type="text" placeholder="Заголовок" v-model="title" class="border-gray-300 p-2 w-1/4">
        </div>
        <div>
            <a @click.prevent="store" class="block w-1/4 py-2 bg-sky-500 border-sky-600 text-white text-center" href="#">Добавить</a>
        </div>
    </div>
</div>
</template>

<script>
import MainLayot from '@/Layouts/MainLayot.vue'
import {
    Link
} from '@inertiajs/vue3';
export default {
    name: "Create",

    props: [
        'sections',
    ],

    data() {
        return {
            title: '',
            section_id: null,
        }
    },

    components: {
        Link
    },

    methods: {
        store() {
            this.$inertia.post('/branches', {
                section_id: this.section_id,
                title: this.title
            })
        }
    },

    layout: MainLayot
}
</script>

<style scoped>

</style>
