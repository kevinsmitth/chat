<template>
    <pages-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-yellow-200 leading-tight px-10">
                Dashboard
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <welcome />
                </div>
            </div>
        </div>
    </pages-layout>
</template>

<script>
    import PagesLayout from '@/Layouts/PagesLayout'
    import Welcome from '@/Jetstream/Welcome'

    export default {
        components: {
            PagesLayout,
            Welcome,
        },
    }
</script>
