<script setup>
import { Head, Link } from '@inertiajs/vue3';

defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },
    laravelVersion: {
        type: String,
        required: true,
    },
    phpVersion: {
        type: String,
        required: true,
    },
});
</script>

<template>
    <Head title="Welcome to Project Travel Info" />

    <div
        class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white"
    >


    <header class="bg-blue-500 p-4 text-white text-center">
        <h1 class="text-4xl font-bold">Travel Information</h1>
        <p class="text-lg">Explore the Beauty of Japan</p>
    </header>

    <!-- Main Content Section -->
    <div class="container mx-auto mt-8 p-4">

        <!-- Introduction Section -->
        <section class="mb-8">
            <h2 class="text-2xl font-semibold mb-2">Welcome to Japan</h2>
            <p>
                Japan is a beautiful country with a rich cultural heritage and stunning natural landscapes. Whether you're interested in the bustling streets of Tokyo, the historic temples of Kyoto, or the serene countryside, Japan has something to offer for every traveler.
            </p>
        </section>

        <!-- Travel Tips Section -->
        <section class="mb-8">
            <h2 class="text-2xl font-semibold mb-2">Travel Tips</h2>
            <ul class="list-disc pl-4">
                <li>Respect local customs and traditions.</li>
                <li>Try traditional Japanese cuisine like sushi and ramen.</li>
                <li>Learn a few basic Japanese phrases for communication.</li>
                <li>Carry cash as some places may not accept credit cards.</li>
            </ul>
        </section>

        <!-- Places to Visit Section -->
        <section class="mb-8">
            <h2 class="text-2xl font-semibold mb-2">Must-Visit Places</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                <div class="bg-white p-4 shadow-md rounded-lg">
                    <h3 class="text-xl font-semibold mb-2">Tokyo</h3>
                    <p>Explore the vibrant capital city with its modern skyscrapers, historic temples, and bustling markets.</p>
                </div>
                <div class="bg-white p-4 shadow-md rounded-lg">
                    <h3 class="text-xl font-semibold mb-2">Kyoto</h3>
                    <p>Discover the ancient city of Kyoto with its beautiful shrines, traditional tea houses, and picturesque gardens.</p>
                </div>
                <div class="bg-white p-4 shadow-md rounded-lg">
                    <h3 class="text-xl font-semibold mb-2">Hiroshima</h3>
                    <p>Visit the Peace Memorial Park and Museum to learn about the city's history and resilience.</p>
                </div>
            </div>
        </section>

    </div>

    <!-- Footer Section -->
    <footer class="bg-blue-500 p-4 text-white text-center">
        <p>&copy; 2023 Travel Information - Japan</p>
    </footer>
    </div>
</template>

<style>
.bg-dots-darker {
    background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E");
}
@media (prefers-color-scheme: dark) {
    .dark\:bg-dots-lighter {
        background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E");
    }
}
</style>
