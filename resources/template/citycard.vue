<script>
import { Head, Link } from "@inertiajs/vue3";
import { ref, defineEmits } from "vue";

export default {
    props: ["data"],
};
</script>
<template>
    <div
        class="city-card bg-gradient-to-r from-blue-500 via-purple-500 to-pink-500 text-white p-4 rounded-lg"
    >
        <a
            :href="data.link"
            class="block p-4 bg-blue-400 rounded-md hover:bg-blue-700 transition duration-300"
        >
            <h3
                class="underline underline-offset-8 text-xl font-semibold text-white hover:text-white"
            >
                {{ data.city }}
            </h3>
            <p class="text-justify py-1">{{ data.description }}</p>
            <div class="w-full h-64 image-class" :class="data.class"></div>
        </a>
    </div>
</template>

<style>
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
