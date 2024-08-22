<template>
    <div>
        <div class="flex items-center mb-4">
            <h3 class="text-xl mr-4"> Личный кабинет </h3>
        </div>

        <div class="bg-white border border-gray-300 p-4">
            <div class="mb-4">
                <p>
                    Приветствую, {{ user.name }}!
                </p>
            </div>

            <div>
                <p>
                    Сменить аватар
                </p>
            </div>
        </div>
    </div>
</template>

<script>
import MainLayot from '@/Layouts/MainLayot.vue'
import { Link } from '@inertiajs/vue3';
    export default {
        name: "Personal",

        props: [
            'user'
        ],

        data() {
            return {}
        },

        components: {
            Link
        },

        layout: MainLayot
    }
</script>

<style scoped>

</style>
