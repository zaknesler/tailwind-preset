<template>
    <div class="w-full">
        <div class="border rounded">
            <div class="px-4 py-3 border-b bg-grey-lightest rounded-t text-grey-darker font-semibold">{{ title || 'Example Component' }}</div>

            <div class="p-4 bg-white rounded-b">
                <slot>I'm an example component!</slot>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['title'],

        mounted () {
            console.log('Component mounted.')
        }
    }
</script>
