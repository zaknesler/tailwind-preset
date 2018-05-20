<template>
    <div class="w-full">
        <div class="border rounded">
            <div class="border-b bg-grey-lightest rounded-t px-4 py-3">
                <div class="text-grey-dark font-semibold">{{ title || 'Example Component' }}</div>
            </div>

            <div class="bg-white rounded-b p-4">
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
