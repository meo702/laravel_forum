<template>
    <div>
        <div class="flex items-center mb-4">
            <h3 class="text-xl mr-4">{{ theme.title }}</h3>
        </div>
        <div>

        </div>

        <div class="bg-white border border-gray-300 p-4">
            <div class="mb-4">
                <h3 class="text-xl mr-4">Добавить сообщение</h3>
            </div>
            <div class="mb-4">
                <div ref="editor" contenteditable="true" class="w-full border border-gray-300 p-2">

                </div>
            </div>
            <div>
                <a @click.prevent="store" href="#" class="block w-1/4 p-2 bg-sky-600 text-white text-center border border-sky-700">Опубликовать</a>
            </div>
        </div>
    </div>
</template>

<script>
import MainLayot from '@/Layouts/MainLayot.vue'
import { Link } from '@inertiajs/vue3';
    export default {
        name: "Show",

        props: [
            'theme'
        ],

        data() {
            return {
                // content: '',
            }
        },

        components: {
            Link
        },

        methods: {
            store() {
                axios.post('/messages', {
                    content: this.$refs.editor.innerHTML,
                    theme_id: this.theme.id
                }).then( res => {
                    console.log(res)
                    this.$refs.editor.innerHTML = ''
                })
            }
        },

        layout: MainLayot
    }
</script>

<style scoped>

</style>
