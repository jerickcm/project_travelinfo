<script>
import { Head, Link } from "@inertiajs/vue3";
import { ref, onMounted, reactive, watch, computed } from "vue";
/** template */
import templateCityCard from "./../../template/citycard.vue";
import Layout from "../Layouts/CityLayout.vue";
export default {
    data: () => ({}),
    components: {
        templateCityCard,
        Head,
        Link,
        Layout,
    },
    setup(props) {
        const city_info = reactive([
            {
                city: "Tokyo",
                class: "tokyo",
                link: "tokyo",
                description:
                    "Tokyo is the capital city of Japan and one of the worlds most populous and vibrant metropolises known for its cutting-edge technology, rich cultural heritage, and bustling urban life.",
            },
            {
                city: "Yokohama",
                class: "yokohama",
                link: "yokohama",
                description:
                    "Yokohama is a major port city in Japan, known for its stunning waterfront, diverse cultural attractions, and the iconic Yokohama Landmark Tower.",
            },
            {
                city: "Kyoto",
                class: "kyoto",
                link: "kyoto",
                description:
                    "Kyoto, a city in Japan, is celebrated for its historic temples, traditional tea houses, and preserved imperial heritage, making it a center of Japanese culture and history.",
            },
            {
                city: "Osaka",
                class: "osaka",
                link: "osaka",
                description:
                    "Osaka, a vibrant city in Japan, is renowned for its modern architecture, bustling street food scene, and lively entertainment, making it a dynamic and welcoming metropolis.",
            },
            {
                city: "Sapporo",
                class: "sapporo",
                link: "sapporo",
                description:
                    "Sapporo, a city in northern Japan, is famous for its winter sports, including the annual Sapporo Snow Festival, as well as its delicious cuisine and beer.",
            },
            {
                city: "Nagoya",
                class: "nagoya",
                link: "nagoya",
                description:
                    "Nagoya, a city in central Japan, is known for its industrial and automotive heritage, cultural landmarks like Nagoya Castle, and its role as a major economic and transportation hub.",
            },
        ]);

        return { city_info };
    },
};
</script>

<template>
    <Layout>
        <Head title="Japan Travel Information" />
        <main class="mx-auto content hidden">
            <!-- Weather Information Box -->
            <div class="bg-white p-6 shadow-lg rounded-lg">
                <h2 class="text-2xl font-semibold mb-4">Weather Information</h2>
            </div>
        </main>
        <main class="mx-auto content">
            <section class="bg-white p-6 shadow-lg rounded-lg">
                <h2 class="text-2xl font-semibold mb-4">Cities to Explore</h2>

                <div
                    class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6"
                >
                    <div
                        v-for="(item, index) in city_info"
                        :key="index"
                        class="city-card bg-gradient-to-r from-blue-500 via-purple-500 to-pink-500 text-white p-4 rounded-lg"
                    >
                        <Link
                            :href="route('city', item.link)"
                            class="block p-4 bg-blue-400 rounded-md hover:bg-blue-700 transition duration-300"
                        >
                            <div class="flex flex-row">
                                <div>
                                    <h3
                                        class="hover:text-2xl transition-transform transform scale-105 underline underline-offset-8 text-xl font-semibold text-white hover:text-white"
                                    >
                                        {{ item.city }}
                                    </h3>
                                </div>
                                <div>
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.5"
                                        stroke="currentColor"
                                        class="w-6 h-6"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M15.042 21.672L13.684 16.6m0 0l-2.51 2.225.569-9.47 5.227 7.917-3.286-.672zM12 2.25V4.5m5.834.166l-1.591 1.591M20.25 10.5H18M7.757 14.743l-1.59 1.59M6 10.5H3.75m4.007-4.243l-1.59-1.59"
                                        />
                                    </svg>
                                </div>
                            </div>

                            <p class="text-justify py-1">
                                {{ item.description }}
                            </p>
                            <div
                                class="w-full h-64 image-class"
                                :class="item.class"
                            ></div>
                        </Link>
                    </div>
                </div>
            </section>

            <!-- Information about each city -->

            <section class="my-6 mx-4">
                <div
                    class="bg-white p-6 shadow-lg rounded-lg border border-gray-300"
                >
                    <fieldset class="border border-solid border-gray-300 p-3">
                        <legend class="text-2xl font-semibold mb-4 p-1">
                            Contact Information
                        </legend>
                        <div class="grid grid-cols-2 gap-4 p-1">
                            <div>
                                <p class="text-sm"><strong>Address:</strong></p>
                                <p>
                                    1-1-2 Shibuya, Shibuya City, Tokyo 150-0002,
                                    Japan
                                </p>
                            </div>
                            <div>
                                <p class="text-sm"><strong>Website:</strong></p>
                                <p>
                                    <a
                                        href="https://www.japan-travel.com"
                                        class="text-blue-500 hover:underline"
                                        target="_blank"
                                        rel="noopener"
                                        >www.japan-travel.com</a
                                    >
                                </p>
                            </div>
                            <div>
                                <p class="text-sm"><strong>Email:</strong></p>
                                <p>
                                    <a
                                        href="mailto:contact@japan-travel.com"
                                        class="text-blue-500"
                                        >contact@japan-travel.com</a
                                    >
                                </p>
                            </div>
                            <div>
                                <p class="text-sm"><strong>Phone:</strong></p>
                                <p>+1 (123) 456-7890</p>
                            </div>
                            <div class="col-span-2">
                                <p class="text-sm">
                                    <strong>Social Media:</strong>
                                </p>
                                <p>
                                    <a
                                        href="https://www.facebook.com/example"
                                        class="text-blue-500 hover:underline"
                                        target="_blank"
                                        rel="noopener"
                                        >Facebook</a
                                    >,
                                    <a
                                        href="https://www.twitter.com/example"
                                        class="text-blue-500 hover:underline"
                                        target="_blank"
                                        rel="noopener"
                                        >Twitter</a
                                    >,
                                    <a
                                        href="https://www.linkedin.com/in/example"
                                        class="text-blue-500 hover:underline"
                                        target="_blank"
                                        rel="noopener"
                                        >LinkedIn</a
                                    >
                                </p>
                            </div>
                        </div>
                    </fieldset>
                </div>
            </section>
          
        </main>
    </Layout>
</template>

<style scoped>
.bg-dots-darker {
    background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E");
}
@media (prefers-color-scheme: dark) {
    .dark\:bg-dots-lighter {
        background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E");
    }
}
.image-class {
    background-size: cover;
    background-position: center;
}
.tokyo {
    background-image: linear-gradient(
            to bottom,
            rgba(0, 0, 255, 0.2),
            rgba(0, 0, 255, 0.3)
        ),
        url("../assets/images/tokyo.jpg");
}
.yokohama {
    background-image: linear-gradient(
            to bottom,
            rgba(0, 0, 255, 0.2),
            rgba(0, 0, 255, 0.3)
        ),
        url("../assets/images/yokohama.jpeg");
}
.kyoto {
    background-image: linear-gradient(
            to bottom,
            rgba(0, 0, 255, 0.2),
            rgba(0, 0, 255, 0.3)
        ),
        url("../assets/images/kyoto.jpeg");
}
.osaka {
    background-image: linear-gradient(
            to bottom,
            rgba(0, 0, 255, 0.2),
            rgba(0, 0, 255, 0.3)
        ),
        url("../assets/images/osaka.jpeg");
}
.sapporo {
    background-image: linear-gradient(
            to bottom,
            rgba(0, 0, 255, 0.2),
            rgba(0, 0, 255, 0.3)
        ),
        url("../../assets/images/sapporo.jpeg");
}
.nagoya {
    background-image: linear-gradient(
            to bottom,
            rgba(0, 0, 255, 0.2),
            rgba(0, 0, 255, 0.3)
        ),
        url("../assets/images/nagoya.jpeg");
}
</style>
