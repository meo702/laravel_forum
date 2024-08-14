<template>
    <div>
        <div class="flex items-center mb-4">
            <h3 class="text-xl mr-4">Редактировать раздел</h3>
        </div>
        <div>
            <div class="mb-4">
                <input type="text" placeholder="Заголовок" v-model="title" class="border-gray-300 p-2 w-1/4">
            </div>
            <div>
                <a @click.prevent="store" class="block w-1/4 py-2 bg-sky-500 border-sky-600 text-white text-center" href="#">Сохранить</a>
            </div>
        </div>
    </div>
</template>

<script>
import MainLayot from '@/Layouts/MainLayot.vue'
import { Link } from '@inertiajs/vue3';
    export default {
        name: "Edit",

        props: [
            'section'
        ],

        data() {
            return {
                title: this.section.title
            }
        },

        components: {
            Link
        },

        methods: {
            store() {
                this.$inertia.patch(`/sections/${this.section.id}`, {title: this.title})
            }
        },

        layout: MainLayot
    }
</script>

<style scoped>

</style>
