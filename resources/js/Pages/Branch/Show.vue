<template>
    <div>
        <div class="flex items-center mb-4">
            <h3 class="text-xl mr-4">{{ branch.title }}</h3>
        </div>
    </div>
    </template>

    <script>
    import MainLayot from '@/Layouts/MainLayot.vue'
    import {
        Link
    } from '@inertiajs/vue3';
    import axios from 'axios';
    export default {
        name: "Show",

        props: [
            'branch'
        ],

        layout: MainLayot
    }
    </script>

    <style scoped>

    </style>
