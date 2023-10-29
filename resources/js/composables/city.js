import { ref, reactive } from "vue";
import axios from "axios";

export default function useCity() {
    const city = ref([]);
    const cities = ref([]);
    const errors_city = ref([]);
    city.value.featured_image = "tokyo.jpg";
    const getCity = async (name) => {
        let response = await axios.get(route("city-get", name));
        city.value = response.data.data;
    };

    return {
        city,
        cities,
        errors_city,
        getCity,
    };
}
