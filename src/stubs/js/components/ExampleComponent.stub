<template>
    <div class="w-full">
        <div class="border rounded-lg">
            <div class="px-4 py-3 border-b bg-gray-100 text-gray-600 font-semibold rounded-t-lg">{{ title || 'Example Component' }}</div>
            <div class="p-4 bg-white text-gray-700 rounded-b-lg overflow-hidden">
                <slot>I'm an example component!</slot>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['title'],
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
