<script>
import { Head, Link } from "@inertiajs/vue3";
import { ref, onMounted, reactive, watch, computed } from "vue";
import Layout from "../../Layouts/CityLayout.vue";

import useCity from "./../../composables/city";
import useOpenWeatherApi from "./../../composables/open_weather_api";
import moment from "moment";

export default {
    components: {
        Layout,
        Head,
        Link,
    },
    setup(props) {
        const form = reactive({});
        const loading = ref(true);
        form.country_code = "jp";
        const dynamicBackgroundImage = ref(
            "https://maps.geoapify.com/v1/staticmap?style=klokantech-basic&width=600&height=400&center=lonlat:136.923771,35.13657&zoom=10.9504&apiKey=33d331351aed4318a15dfdd3ef901fc5"
        );
        const { getCity, city } = useCity();
        const { getWeatherByCity, weather, errors_weather } =
            useOpenWeatherApi();
        const convert_timezone = (timestamp, timezone) => {
            const dateTime = moment.unix(timestamp).utcOffset(timezone);
            return dateTime.format("h:mm:ss A ");
        };
        const dynamicBackgroundUrl = computed(() => {
            return `url(${dynamicBackgroundImage.value})`;
        });

        onMounted(async () => {
            loading.value = true;
        
            form.city_name = route().params.name;

            await getCity(form.city_name);
            await getWeatherByCity({ ...form }).then(() => {
                loading.value = false;
           
            });

            dynamicBackgroundImage.value = city.value.url;
        });
     
        return {
            city,
            weather,
            convert_timezone,
            dynamicBackgroundUrl,
            loading,
        };
    },
};
</script>
<template>
    <Layout>
        <Head title="Japan Travel Information" />

        <div class="article-page bg-gray-100 p-4" v-if="!loading">
            <nav class="flex my-2" aria-label="Breadcrumb">
                <ol class="flex items-center space-x-4">
                    <li>
                        <Link
                            :href="route('homepage')"
                            class="text-gray-600 hover:text-gray-800 hover:text-2xl transition-transform transform scale-105"
                        >
                            <svg
                                class="h-5 w-5 mr-2 text-gray-400"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                aria-hidden="true"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M10 19l-7-7m0 0l7-7m-7 7h18"
                                />
                            </svg>
                            Back
                        </Link>
                    </li>
                </ol>
            </nav>

            <h1 class="text-3xl font-bold text-blue-800">
                {{ city.name }} City
            </h1>

            <p class="text-sm text-gray-600 my-5">
                {{ city.description }}
            </p>

            <div
                class="m-4 p-4 bg-white rounded shadow-md"
                v-for="(item, index) in weather"
                :key="index"
            >
                <h2 class="text-2xl font-semibold mb-4">Weather Information</h2>

                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-lg font-semibold">
                            City: {{ item.name }}
                        </p>
                        <p class="text-gray-600">
                            Country:{{ item.sys.country }}
                        </p>
                    </div>
                    <div>
                        <p class="text-4xl font-semibold">
                            {{ parseInt(item.main.temp - 273.15) }} °C
                        </p>

                        <label
                            >{{
                                parseInt(
                                    (item.main.temp - 273.15) * (9 / 5) + 32
                                )
                            }}
                            °F
                        </label>
                        or
                        <label>{{ parseInt(item.main.temp) }} Kelvin </label>
                        <p class="text-gray-600">
                            {{ item.weather[0]["main"] }} -
                            {{ item.weather[0]["description"] }}
                        </p>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div class="">
                        <p class="text-gray-600">
                            Pressure: {{ item.main.pressure }}
                        </p>
                        <p class="text-gray-600">
                            Wind Speed: {{ item.wind.speed }} m/s
                        </p>
                        <p class="text-gray-600">
                            Humidity: {{ item.main.humidity }} %
                        </p>
                        <p class="text-gray-600">
                            Visibility: {{ item.visibility / 1000 }} km
                        </p>
                    </div>

                    <div class="">
                        <div class="mt-4">
                            <p class="text-gray-600 text-right">
                                Sunrise:
                                {{
                                    convert_timezone(
                                        item.sys.sunrise,
                                        item.timezone
                                    )
                                }}
                            </p>
                            <p class="text-gray-600 text-right">
                                Sunset:
                                {{
                                    convert_timezone(
                                        item.sys.sunset,
                                        item.timezone
                                    )
                                }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex justify-center items-center">
                <img
                    :src="'../assets/images/' + city.featured_image"
                    :alt="city.featured_image"
                />
            </div>
            <h3
                class="text-medium font-medium my-5 underline underline-offset-8"
            >
                City Introduction
            </h3>
            <div class="text-justify article-content mt-4">
                {{ city.description }}
            </div>

            <h3
                class="text-medium font-medium my-5 underline underline-offset-8"
            >
                City Background
            </h3>
            <div class="text-justify article-content mt-4">
                {{ city.content1 }}
            </div>

            <h3
                class="text-medium font-medium my-5 underline underline-offset-8"
            >
                Travel Guides
            </h3>
            <div class="text-justify article-content mt-4">
                {{ city.travel_guides }}
            </div>
            <div class="border-sky-500 m-2 p-2 border-x-4 mt-5 mb-5">
                <div
                    class="text-justify article-content mt-4"
                    v-html="city.itinerary"
                ></div>
            </div>
            <h2 class="text-2xl font-semibold mb-4">Map :</h2>
            <div
                class="flex justify-center items-center m-4 p-4 bg-white rounded shadow-md"
            >
                <div>
                    <h2 class="text-2xl font-semibold mb-4">
                        City Map Location
                    </h2>
                </div>

                <div
                    class="map border border-gray-500 border-2"
                    :style="{ background: dynamicBackgroundUrl }"
                ></div>
            </div>
        </div>
        <div class="article-page bg-gray-100 p-4" v-if="loading">
            <div
                class="h-2.5 bg-gray-200 rounded-full dark:bg-gray-700 w-48 mb-4"
            ></div>
            <div
                class="flex items-center justify-center h-48 mb-4 bg-gray-300 rounded dark:bg-gray-700"
            >
                <svg
                    class="w-10 h-10 text-gray-200 dark:text-gray-600"
                    aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor"
                    viewBox="0 0 16 20"
                >
                    <path
                        d="M14.066 0H7v5a2 2 0 0 1-2 2H0v11a1.97 1.97 0 0 0 1.934 2h12.132A1.97 1.97 0 0 0 16 18V2a1.97 1.97 0 0 0-1.934-2ZM10.5 6a1.5 1.5 0 1 1 0 2.999A1.5 1.5 0 0 1 10.5 6Zm2.221 10.515a1 1 0 0 1-.858.485h-8a1 1 0 0 1-.9-1.43L5.6 10.039a.978.978 0 0 1 .936-.57 1 1 0 0 1 .9.632l1.181 2.981.541-1a.945.945 0 0 1 .883-.522 1 1 0 0 1 .879.529l1.832 3.438a1 1 0 0 1-.031.988Z"
                    />
                    <path
                        d="M5 5V.13a2.96 2.96 0 0 0-1.293.749L.879 3.707A2.98 2.98 0 0 0 .13 5H5Z"
                    />
                </svg>
            </div>
            <div
                class="flex items-center justify-center h-48 mb-4 bg-gray-300 rounded dark:bg-gray-700"
            >
                <svg
                    class="w-10 h-10 text-gray-200 dark:text-gray-600"
                    aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor"
                    viewBox="0 0 16 20"
                >
                    <path
                        d="M14.066 0H7v5a2 2 0 0 1-2 2H0v11a1.97 1.97 0 0 0 1.934 2h12.132A1.97 1.97 0 0 0 16 18V2a1.97 1.97 0 0 0-1.934-2ZM10.5 6a1.5 1.5 0 1 1 0 2.999A1.5 1.5 0 0 1 10.5 6Zm2.221 10.515a1 1 0 0 1-.858.485h-8a1 1 0 0 1-.9-1.43L5.6 10.039a.978.978 0 0 1 .936-.57 1 1 0 0 1 .9.632l1.181 2.981.541-1a.945.945 0 0 1 .883-.522 1 1 0 0 1 .879.529l1.832 3.438a1 1 0 0 1-.031.988Z"
                    />
                    <path
                        d="M5 5V.13a2.96 2.96 0 0 0-1.293.749L.879 3.707A2.98 2.98 0 0 0 .13 5H5Z"
                    />
                </svg>
            </div>
            <div
                class="h-2 bg-gray-200 rounded-full dark:bg-gray-700 mb-2.5"
            ></div>
            <div
                class="h-2 bg-gray-200 rounded-full dark:bg-gray-700 mb-2.5"
            ></div>
            <div class="h-2 bg-gray-200 rounded-full dark:bg-gray-700"></div>
            <div class="flex items-center mt-4 space-x-3">
                <svg
                    class="w-10 h-10 text-gray-200 dark:text-gray-700"
                    aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                >
                    <path
                        d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm0 13a8.949 8.949 0 0 1-4.951-1.488A3.987 3.987 0 0 1 9 13h2a3.987 3.987 0 0 1 3.951 3.512A8.949 8.949 0 0 1 10 18Z"
                    />
                </svg>
                <div>
                    <div
                        class="h-2.5 bg-gray-200 rounded-full dark:bg-gray-700 w-32 mb-2"
                    ></div>
                    <div
                        class="w-48 h-2 bg-gray-200 rounded-full dark:bg-gray-700"
                    ></div>
                </div>
            </div>
            <span class="sr-only">Loading...</span>
            <div
                class="flex items-center justify-center h-48 mb-4 bg-gray-300 rounded dark:bg-gray-700"
            >
                <svg
                    class="w-10 h-10 text-gray-200 dark:text-gray-600"
                    aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor"
                    viewBox="0 0 16 20"
                >
                    <path
                        d="M14.066 0H7v5a2 2 0 0 1-2 2H0v11a1.97 1.97 0 0 0 1.934 2h12.132A1.97 1.97 0 0 0 16 18V2a1.97 1.97 0 0 0-1.934-2ZM10.5 6a1.5 1.5 0 1 1 0 2.999A1.5 1.5 0 0 1 10.5 6Zm2.221 10.515a1 1 0 0 1-.858.485h-8a1 1 0 0 1-.9-1.43L5.6 10.039a.978.978 0 0 1 .936-.57 1 1 0 0 1 .9.632l1.181 2.981.541-1a.945.945 0 0 1 .883-.522 1 1 0 0 1 .879.529l1.832 3.438a1 1 0 0 1-.031.988Z"
                    />
                    <path
                        d="M5 5V.13a2.96 2.96 0 0 0-1.293.749L.879 3.707A2.98 2.98 0 0 0 .13 5H5Z"
                    />
                </svg>
            </div>
        </div>
    </Layout>
</template>

<style scoped>
.article-page {
    @apply max-w-screen-md mx-auto p-4;
}

.article-content {
    @apply text-lg text-gray-800 mt-4;
}

.image-class {
    background-size: cover;
    background-position: center;
}
.nagoya-map {
    width: 600px;
    height: 400px;
    background-image: url(https://maps.geoapify.com/v1/staticmap?style=klokantech-basic&width=600&height=400&center=lonlat:136.923771,35.13657&zoom=10.9504&apiKey=33d331351aed4318a15dfdd3ef901fc5);
}

.map {
    width: 600px;
    height: 400px;
    background-image: url(https://maps.geoapify.com/v1/staticmap?style=klokantech-basic&width=600&height=400&center=lonlat:136.923771,35.13657&zoom=10.9504&apiKey=33d331351aed4318a15dfdd3ef901fc5);
}
</style>
