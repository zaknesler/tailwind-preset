<template>
    <div class="border shadow-sm rounded-lg">
        <div class="px-4 py-3 border-b bg-gray-100 text-gray-700 font-medium rounded-t-lg" v-text="title" />
        <div class="p-4 bg-white text-gray-700 rounded-b-lg overflow-hidden">
            <slot>I'm an example component!</slot>
        </div>
    </div>
</template>

<script>
    export default {
        props: {
            title: {
                type: String,
                required: false,
                default: 'Example Component',
            },
        },

        mounted() {
            console.log('Component mounted.')
        },
    }
</script>
