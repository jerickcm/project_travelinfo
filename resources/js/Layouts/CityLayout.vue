<script>
import { Head, Link } from "@inertiajs/vue3";

export default {
    data: () => ({}),
    components: {
        Link,
    },
};
</script>
<template>
    <header class="header-main text-white text-center py-8">
        <div class="header-text">
            <h1 class="text-3xl font-semibold">Japan Travel Information</h1>
            <p class="text-lg">
                For Foreign Tourists Visiting Japan for the First Time
            </p>
        </div>
    </header>

    <div>
        <slot />
    </div>

    <footer class="footer bg-gray-900 text-gray-200 py-4 text-center">
        <div class="container mx-auto">
            <p>
                If you have any questions or inquiries, please
                <a
                    href="mailto:contact@japan-travel.com"
                    class="text-blue-400 hover:text-blue-200"
                    >contact us via email</a
                >.
            </p>
            <div class="mt-4">
                <Link
                    :href="route('homepage')"
                    class="text-blue-400 hover:text-blue-200 mr-4"
                    >Home</Link
                >
                <Link
                    :href="route('about')"
                    class="text-blue-400 hover:text-blue-200 mr-4"
                    >About Us</Link
                >
            </div>
            <!-- <div class="mt-4">
                <a href="#" class="text-blue-400 hover:text-blue-200"
                    ><i class="fab fa-facebook-square"></i
                ></a>
                <a href="#" class="text-blue-400 hover:text-blue-200"
                    ><i class="fab fa-twitter-square"></i
                ></a>
                <a href="#" class="text-blue-400 hover:text-blue-200"
                    ><i class="fab fa-instagram-square"></i
                ></a>
            </div> -->
        </div>
    </footer>
</template>
<style>
.footer {
    background-color: #333;
    color: white;
    padding: 20px;
}
.header-main {
    background-image: url("../assets/images/japanbanner.jpeg");
    background-size: cover;
    background-position: center;
}
.header-text {
    background-color: rgba(0, 0, 255, 0.5);
    display: inline-block;
    padding: 8px 16px;
}
.footer {
    background-color: #333;
    color: white;
    padding: 20px;
}
</style>
