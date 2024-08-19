<template>
    <div>
        <div class="flex items-center mb-4">
            <h3 class="text-xl mr-4">Редактировать тему</h3>
        </div>
        <div>
            <div class="mb-4">
                <input type="text" placeholder="Заголовок" v-model="title" class="border-gray-300 p-2 w-1/2">
            </div>
            <div class="mb-4">
                <textarea placeholder="Описание" v-model="description" class="border-gray-300 p-2 w-1/2">
                    {{ description }}
                </textarea>
            </div>
            <div>
                <a @click.prevent="update" class="block w-1/4 py-2 bg-sky-500 border-sky-600 text-white text-center" href="#">Сохранить</a>
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
            'theme'
        ],

        data() {
            return {
                title: this.theme.title,
                description: this.theme.description,
            }
        },

        components: {
            Link
        },

        methods: {
            update() {
                this.$inertia.patch(`/themes/${this.theme.id}`, {
                    title: this.title,
                    description: this.description,
                })
            }
        },

        layout: MainLayot
    }
</script>

<style scoped>

</style>
