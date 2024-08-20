<template>
    <div>
        <div class="flex items-center mb-4">
            <h3 class="text-xl mr-4">{{ theme.title }}</h3>
        </div>
        <div v-if="theme.messages.length">
            <div v-for="message in theme.messages" class="flex bg-white border border-gray-300">
                <div class="p-4 w-1/6 border-r border-gray-300">
                    <div class="w-24 h-24 bg-gray-300 rounded-full mx-auto mb-2">
                        <!-- avatar -->
                    </div>
                    <div>
                        <h3 class="text-center">{{ message.user.name }}</h3>
                    </div>
                </div>

                <div class="p-4 w-5/6">
                    <div class="mb-2">
                        <p class="text-sm italic">{{ message.time }}</p>
                    </div>

                    <div>
                        <p v-html="message.content"></p>
                    </div>
                </div>
            </div>
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
