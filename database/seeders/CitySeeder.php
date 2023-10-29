<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cities;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {

        $citiesData = [
            [
                'name' => 'Tokyo',
                'description' => "Tokyo is the capital city of Japan and one of the worlds most populous and vibrant metropolises known for its cutting-edge technology, rich cultural heritage, and bustling urban life.",
                'featured_image' => 'tokyo.jpg',
                'content1' => 'Tokyo, the vibrant and bustling capital of Japan, is a sprawling metropolis that seamlessly combines modernity with tradition. This dynamic city is known for its towering skyscrapers, cutting-edge technology, and a fast-paced lifestyle that never seems to slow down. At the same time, Tokyo is deeply rooted in its cultural heritage, with historic temples, shrines, and the Imperial Palace standing as testament to its rich history. The city is a global hub for art, fashion, and cuisine, offering a diverse range of culinary experiences from street food to Michelin-starred restaurants. With its efficient public transportation system, Tokyo is a gateway to exploring the many neighborhoods, each with its own unique character, making it a must-visit destination for any traveler.',
                'content2' => '',
                'content3' => '',
                'content4' => '',
                'notes' => '',
                'url' => 'https://maps.geoapify.com/v1/staticmap?style=klokantech-basic&width=600&height=400&center=lonlat:139.762032,35.671989&zoom=13.0519&apiKey=33d331351aed4318a15dfdd3ef901fc5',
                'travel_guides' => "Tokyo, the capital of Japan, is a city that seamlessly blends the traditional and the modern. Start your journey with a visit to the historic Asakusa district, home to the iconic Senso-ji Temple and Nakamise-dori shopping street. Explore the Meiji Shrine, set within a serene forest in the heart of the city, and then head to the bustling district of Shibuya to witness the famous Shibuya Crossing. For a taste of Tokyo's contemporary side, visit the Tokyo Skytree for panoramic views or explore the vibrant neighborhoods of Shinjuku and Harajuku. Don't forget to indulge in Japan's culinary delights with sushi, ramen, and street food. Tokyo offers a rich cultural experience and something for every traveler, from traditional tea ceremonies to futuristic technology.",
                'itinerary' => '
                <h1 class="text-3xl font-bold text-center mt-8">Travel Guides and Itineraries for Tokyo</h1>
                <div class="max-w-lg mx-auto my-8">
                    <!-- Day 1 -->
                    <div class="bg-white rounded-lg shadow-md overflow-hidden p-4">
                        <h2 class="text-xl font-semibold">Day 1: Exploring Tokyos Culture and History</h2>
                        <p>Visit Senso-ji Temple in Asakusa.</p>
                        <p>Explore Nakamise Shopping Street.</p>
                        <p>Enjoy local Japanese street food in Asakusa.</p>
                        <p>Stroll through Ueno Park and visit the Tokyo National Museum or Ueno Zoo.</p>
                        <p>Shop at Ameya-Yokocho Market.</p>
                        <p>Explore Akihabara, the electronics and anime district.</p>
                        <p>Dine at a local restaurant in Akihabara.</p>
                    </div>
                
                    <!-- Day 2 -->
                    <div class="bg-white rounded-lg shadow-md overflow-hidden p-4 mt-4">
                        <h2 class="text-xl font-semibold">Day 2: Modern Tokyo and Shopping</h2>
                        <p>Visit Shibuya and see the famous Shibuya Crossing.</p>
                        <p>Explore shops and cafes in Shibuya Center Street.</p>
                        <p>Try a bowl of ramen at a local ramen shop in Shibuya.</p>
                        <p>Stroll along Takeshita Street in Harajuku for trendy fashion.</p>
                        <p>Visit Meiji Shrine and the surrounding park.</p>
                        <p>Explore Omotesando, an upscale shopping street.</p>
                        <p>Dine at a stylish restaurant in the area.</p>
                    </div>
                
                    <!-- Day 3 -->
                    <div class="bg-white rounded-lg shadow-md overflow-hidden p-4 mt-4">
                        <h2 class="text-xl font-semibold">Day 3: Tokyos Skyscrapers and Entertainment</h2>
                        <p>Enjoy panoramic views of the city from Tokyo Skytree.</p>
                        <p>Dine at one of the restaurants in Tokyo Skytree Town.</p>
                        <p>Visit Odaiba, Palette Town, and Oedo Onsen Monogatari.</p>
                        <p>Explore teamLab Borderless digital art museum.</p>
                        <p>Take a Tokyo Bay Cruise and enjoy the citys skyline.</p>
                        <p>Dine at one of the waterfront restaurants in Odaiba.</p>
                    </div>
                </div>
                ',
            ],
            [
                'name' => 'Yokohama',
                'description' => "Yokohama is a major port city in Japan, known for its stunning waterfront, diverse cultural attractions, and the iconic Yokohama Landmark Tower.",
                'featured_image' => 'yokohama.jpeg',
                'content1' => "Located just south of Tokyo, Yokohama is Japan's second-largest city and offers a more relaxed contrast to its bustling neighbor. This coastal city is renowned for its beautiful waterfront area, where visitors can enjoy leisurely strolls along the harbor, visit the iconic Yokohama Landmark Tower, and explore the historic district of Yamate. Yokohama is a city of cultural diversity, evident in its various international festivals, making it a welcoming destination for people from all walks of life. With a mix of modern developments and historic neighborhoods, Yokohama provides a delightful blend of contemporary living and traditional charm, attracting visitors looking for a unique Japanese experience.",
                'content2' => '',
                'content3' => '',
                'content4' => '',
                'notes' => '',
                'url' => 'https://maps.geoapify.com/v1/staticmap?style=klokantech-basic&width=600&height=400&center=lonlat:139.644697,35.432445&zoom=12.0775&apiKey=33d331351aed4318a15dfdd3ef901fc5',
                'travel_guides' => "Yokohama, just a short train ride from Tokyo, is a coastal city with a relaxed atmosphere and beautiful bay views. Start your exploration at Yokohama Chinatown, the largest in Japan, to savor delicious Chinese cuisine and shop for unique souvenirs. Stroll along the scenic waterfront at Yamashita Park and visit the famous Hikawa Maru, a historic ocean liner turned museum. Don't miss the Landmark Tower's Sky Garden for panoramic views of the city, and enjoy a leisurely walk across the Osanbashi Pier with its unique architecture. Yokohama offers a blend of history, modernity, and maritime charm, making it a delightful destination for a day trip or a more extended stay.",
                'itinerary' => '<h1 class="text-3xl font-bold text-center mt-8">Travel Guides and Itineraries for Yokohama</h1>
                <div class="max-w-lg mx-auto my-8">
                    <!-- Day 1 -->
                    <div class="bg-white rounded-lg shadow-md overflow-hidden p-4">
                        <h2 class="text-xl font-semibold">Day 1: Yokohamas Waterfront Charm</h2>
                        <p>Start your day at Yokohama Chinatown, the largest in Japan.</p>
                        <p>Visit the historic Yamashita Park along the waterfront for stunning views.</p>
                        <p>Explore the Nippon Maru, a sailing ship turned museum.</p>
                        <p>Enjoy a seafood dinner in the lively Red Brick Warehouse district.</p>
                    </div>
                
                    <!-- Day 2 -->
                    <div class="bg-white rounded-lg shadow-md overflow-hidden p-4 mt-4">
                        <h2 class="text-xl font-semibold">Day 2: Modern Yokohama and Entertainment</h2>
                        <p>Head to Minato Mirai 21, a futuristic district with shopping and attractions.</p>
                        <p>Visit Landmark Tower for an amazing view from the Sky Garden observatory.</p>
                        <p>Explore the Cosmo Clock 21, one of the worlds largest Ferris wheels.</p>
                        <p>Experience Japanese nightlife in the bars and clubs of Noge Street.</p>
                    </div>
                
                    <!-- Day 3 -->
                    <div class="bg-white rounded-lg shadow-md overflow-hidden p-4 mt-4">
                        <h2 class="text-xl font-semibold">Day 3: Yokohamas Culture and Nature</h2>
                        <p>Discover the Sankeien Garden, a traditional Japanese garden with historic buildings.</p>
                        <p>Visit the Yokohama Museum of Art, home to a diverse collection of artworks.</p>
                        <p>Explore the Ramen Museum to savor regional ramen from all over Japan.</p>
                        <p>End your day with a stroll along the beautiful Motomachi Shopping Street.</p>
                    </div>
                </div>'
            ],
            [
                'name' => 'Kyoto',
                'description' => "Kyoto, a city in Japan, is celebrated for its historic temples, traditional tea houses, and preserved imperial heritage, making it a center of Japanese culture and history.",
                'featured_image' =>  'kyoto.jpeg',
                'content1' => "Kyoto, located in the Kansai region of Japan, is a city steeped in rich cultural heritage and timeless traditions. It was the imperial capital for over a thousand years and remains a living museum of Japan's history. This city is renowned for its well-preserved traditional architecture, including wooden temples, shrines, and elegant gardens. Kyoto is also famous for its annual geisha culture and tea ceremonies. Visitors can explore iconic sites like Kinkaku-ji (the Golden Pavilion), Ginkaku-ji (the Silver Pavilion), and the beautiful Arashiyama Bamboo Grove. A visit to Kyoto is a journey through time, offering a serene and profound experience of Japan's past and present.",
                'content2' => '',
                'content3' => '',
                'content4' => '',
                'notes' => '',
                'url' => 'https://maps.geoapify.com/v1/staticmap?style=klokantech-basic&width=600&height=400&center=lonlat:135.760186,34.989335&zoom=11.4623&apiKey=33d331351aed4318a15dfdd3ef901fc5',
                'travel_guides' => "Kyoto, a city that embodies Japan's rich cultural heritage, offers a captivating experience for travelers. Begin your journey at Kinkaku-ji, the Golden Pavilion, with its stunning architecture and reflective pond. Explore the historic Gion district, known for its geisha culture and traditional tea houses. Don't miss Fushimi Inari Shrine, famous for its thousands of red torii gates winding through a forested mountain. Kyoto is also a place to savor exquisite kaiseki cuisine and participate in tea ceremonies. The city's serene gardens, bamboo groves, and ancient temples create an atmosphere of tranquility and contemplation, making Kyoto an ideal destination for those seeking to connect with Japan's deep-rooted traditions.",
                'itinerary' => '<h1 class="text-3xl font-bold text-center mt-8">Travel Guides and Itineraries for Kyoto</h1>
                <div class="max-w-lg mx-auto my-8">
                    <!-- Day 1 -->
                    <div class="bg-white rounded-lg shadow-md overflow-hidden p-4">
                        <h2 class="text-xl font-semibold">Day 1: Discovering Kyotos Historic Temples</h2>
                        <p>Begin your journey at Kinkaku-ji (the Golden Pavilion), a stunning Zen temple.</p>
                        <p>Explore Ryoan-ji to see the famous rock garden and serene surroundings.</p>
                        <p>Visit the peaceful Kiyomizu-dera with its wooden stage overlooking the city.</p>
                        <p>Enjoy traditional kaiseki cuisine at a local restaurant in Gion district.</p>
                    </div>
                
                    <!-- Day 2 -->
                    <div class="bg-white rounded-lg shadow-md overflow-hidden p-4 mt-4">
                        <h2 class="text-xl font-semibold">Day 2: Kyotos Cultural Heritage</h2>
                        <p>Discover the Fushimi Inari Taisha, famous for its thousands of red torii gates.</p>
                        <p>Visit the Ginkaku-ji (the Silver Pavilion) and its beautifully landscaped gardens.</p>
                        <p>Explore Nijo Castle, known for its "nightingale floors" that chirp when walked on.</p>
                        <p>Experience a tea ceremony at a traditional tea house in Uji, famous for matcha tea.</p>
                    </div>
                
                    <!-- Day 3 -->
                    <div class="bg-white rounded-lg shadow-md overflow-hidden p-4 mt-4">
                        <h2 class="text-xl font-semibold">Day 3: Kyotos Natural Beauty and Arts</h2>
                        <p>Stroll through the beautiful Arashiyama Bamboo Grove in western Kyoto.</p>
                        <p>Visit the Tenryu-ji Temple and its stunning Zen garden.</p>
                        <p>Explore the Kyoto International Manga Museum for a unique cultural experience.</p>
                        <p>End your day with a boat ride in Hozugawa River with picturesque views.</p>
                    </div>
                </div>'
            ],
            [
                'name' => "Osaka",
                'description' =>
                "Osaka, often referred to as Japan's kitchen, is a lively and bustling city that's a culinary delight. It's renowned for its street food, local dishes like takoyaki (octopus balls) and okonomiyaki (savory pancakes), and a vibrant dining scene. Osaka Castle, with its historical significance and stunning architecture, is a must-visit attraction. The city also offers vibrant nightlife, entertainment, and modern shopping districts. Known for its warm and friendly locals, Osaka exudes a sense of hospitality that is unique to the Kansai region. It's a place where visitors can enjoy a blend of tradition and contemporary living in a lively and welcoming atmosphere.",
                'content1' => "Osaka, often referred to as Japan's 'Kitchen of the Nation,' is a vibrant and dynamic city that serves as a bustling epicenter of culture, commerce, and cuisine. Nestled in the Kansai region, Osaka is the third-largest city in Japan and renowned for its distinct character. The city seamlessly marries modernity with tradition, as it boasts a futuristic skyline while preserving its historical landmarks.

                With a rich history dating back to ancient times, Osaka is home to remarkable attractions like Osaka Castle, a majestic fortress that offers a glimpse into the city's storied past. Its thriving street food scene, particularly in the Dotonbori district, lures food enthusiasts from around the world to savor iconic dishes such as takoyaki and okonomiyaki. Additionally, Osaka is a hub for entertainment, housing Universal Studios Japan and a vibrant nightlife that comes alive after dark. The warmth of its people, known for their friendly and down-to-earth demeanor, adds to Osaka's unique charm, making it a must-visit destination for those seeking an authentic Japanese experience.",
                'featured_image' =>  'osaka.jpeg',
                'content2' => '',
                'content3' => '',
                'content4' => '',
                'notes' => '',
                'url' => 'https://maps.geoapify.com/v1/staticmap?style=klokantech-basic&width=600&height=400&center=lonlat:135.498243,34.646273&zoom=10.8471&apiKey=33d331351aed4318a15dfdd3ef901fc5',
                'travel_guides' => "Osaka, often referred to as 'Japan's Kitchen,' is a culinary delight with a vibrant atmosphere. Start your food adventure in Dotonbori, known for its neon signs, street food stalls, and local specialties like takoyaki. Visit Osaka Castle to immerse yourself in history and enjoy panoramic views from the observation deck. For modern entertainment, explore Universal Studios Japan, and if you're a fan of marine life, Osaka Aquarium Kaiyukan is a must-visit. The city's open-minded and friendly locals create a welcoming environment. Don't forget to try okonomiyaki, a savory pancake, and enjoy the lively nightlife in districts like Shinsaibashi and Namba. Osaka is a place to indulge in delicious cuisine, entertainment, and warm hospitality.",
                'itinerary' => '<h1 class="text-3xl font-bold text-center mt-8">Travel Guides and Itineraries for Osaka</h1>
                <div class="max-w-lg mx-auto my-8">
                    <!-- Day 1 -->
                    <div class="bg-white rounded-lg shadow-md overflow-hidden p-4">
                        <h2 class="text-xl font-semibold">Day 1: Osakas Culinary Delights</h2>
                        <p>Start your day with a visit to Dotonbori for street food and entertainment.</p>
                        <p>Taste Osakas famous takoyaki (octopus balls) and okonomiyaki (savory pancakes).</p>
                        <p>Visit the bustling Kuromon Ichiba Market for a variety of local treats.</p>
                        <p>End your day with dinner at a kushikatsu restaurant for deep-fried skewers.</p>
                    </div>
                
                    <!-- Day 2 -->
                    <div class="bg-white rounded-lg shadow-md overflow-hidden p-4 mt-4">
                        <h2 class="text-xl font-semibold">Day 2: Osakas Historical and Cultural Sights</h2>
                        <p>Explore the historic Osaka Castle and its beautiful park grounds.</p>
                        <p>Visit the Sumiyoshi Taisha Shrine, known for its unique architectural style.</p>
                        <p>Discover the Shitenno-ji Temple, one of Japans oldest Buddhist temples.</p>
                        <p>Experience traditional kabuki theater at Minami-za in the evening.</p>
                    </div>
                
                    <!-- Day 3 -->
                    <div class="bg-white rounded-lg shadow-md overflow-hidden p-4 mt-4">
                        <h2 class="text-xl font-semibold">Day 3: Modern Osaka and Entertainment</h2>
                        <p>Head to Universal Studios Japan for thrilling rides and entertainment.</p>
                        <p>Explore the futuristic DiverCity Osaka for shopping and attractions.</p>
                        <p>Visit the vibrant Amerikamura district for trendy fashion and street art.</p>
                        <p>Experience Osakas nightlife in the vibrant bars and clubs of Shinsaibashi.</p>
                    </div>
                </div>'
            ],
            [
                'name' => 'Sapporo',
                'description' =>
                "Sapporo, a city in northern Japan, is famous for its winter sports, including the annual Sapporo Snow Festival, as well as its delicious cuisine and beer.",
                'featured_image' => 'sapporo.jpeg',
                'content1' => "Sapporo, the largest city on Japan's northern island of Hokkaido, offers a distinctly different experience compared to the country's more southern regions. It's famous for its stunning winter landscapes and is a paradise for winter sports enthusiasts. Sapporo is also known for its beer, particularly the Sapporo Beer brand, and visitors can explore the Sapporo Beer Museum. The city boasts beautiful parks, including Maruyama Park with its famous cherry blossoms and Odori Park, which hosts the Sapporo Snow Festival in winter. Sapporo offers a unique blend of urban living, outdoor adventure, and a friendly atmosphere, making it an excellent destination for both nature lovers and city explorers.",
                'content2' => '',
                'content3' => '',
                'content4' => '',
                'notes' => '',
                'url' => 'https://maps.geoapify.com/v1/staticmap?style=klokantech-basic&width=600&height=400&center=lonlat:141.389592,43.021226&zoom=10.5912&apiKey=33d331351aed4318a15dfdd3ef901fc5',
                'travel_guides' => "Sapporo, located in the northern island of Hokkaido, is a city with a unique blend of winter sports, cultural attractions, and stunning natural beauty. Start your visit by exploring the beautiful Odori Park, which transforms into a winter wonderland during the Sapporo Snow Festival. Experience the vibrant Susukino district with its entertainment, restaurants, and nightlife. If you're a beer enthusiast, don't miss the Sapporo Beer Museum. In winter, enjoy skiing and snowboarding at resorts like Niseko. Sapporo is also famous for its delicious seafood, including fresh sushi and seafood markets. The city offers a refreshing escape for nature lovers, with nearby hot springs and scenic landscapes, making it an excellent destination for year-round adventure.",
                'itinerary' => '<h1 class="text-3xl font-bold text-center mt-8">Travel Guides and Itineraries for Osaka</h1>
                <div class="max-w-lg mx-auto my-8">
                    <!-- Day 1 -->
                    <div class="bg-white rounded-lg shadow-md overflow-hidden p-4">
                        <h2 class="text-xl font-semibold">Day 1: Osakas Culinary Delights</h2>
                        <p>Start your day with a visit to Dotonbori for street food and entertainment.</p>
                        <p>Taste Osakas famous takoyaki (octopus balls) and okonomiyaki (savory pancakes).</p>
                        <p>Visit the bustling Kuromon Ichiba Market for a variety of local treats.</p>
                        <p>End your day with dinner at a kushikatsu restaurant for deep-fried skewers.</p>
                    </div>
                
                    <!-- Day 2 -->
                    <div class="bg-white rounded-lg shadow-md overflow-hidden p-4 mt-4">
                        <h2 class="text-xl font-semibold">Day 2: Osakas Historical and Cultural Sights</h2>
                        <p>Explore the historic Osaka Castle and its beautiful park grounds.</p>
                        <p>Visit the Sumiyoshi Taisha Shrine, known for its unique architectural style.</p>
                        <p>Discover the Shitenno-ji Temple, one of Japans oldest Buddhist temples.</p>
                        <p>Experience traditional kabuki theater at Minami-za in the evening.</p>
                    </div>
                
                    <!-- Day 3 -->
                    <div class="bg-white rounded-lg shadow-md overflow-hidden p-4 mt-4">
                        <h2 class="text-xl font-semibold">Day 3: Modern Osaka and Entertainment</h2>
                        <p>Head to Universal Studios Japan for thrilling rides and entertainment.</p>
                        <p>Explore the futuristic DiverCity Osaka for shopping and attractions.</p>
                        <p>Visit the vibrant Amerikamura district for trendy fashion and street art.</p>
                        <p>Experience Osakas nightlife in the vibrant bars and clubs of Shinsaibashi.</p>
                    </div>
                </div>'
            ],
            [
                'name' => 'Nagoya',
                'description' => "Nagoya, a city in central Japan, is known for its industrial and automotive heritage, cultural landmarks like Nagoya Castle, and its role as a major economic and transportation hub.",
                'featured_image' => 'nagoya.jpeg',
                'content1' => "Nagoya, located in the Chubu region, is one of Japan's major industrial and economic hubs. The city is often overshadowed by its more famous neighbors, but it has its own charm and unique attractions. Nagoya Castle, with its iconic golden shachihoko (dolphin-shaped roof ornaments), is a symbol of the city's historical significance. The city is also home to the Toyota Commemorative Museum of Industry and Technology, providing insights into Japan's automotive legacy. Nagoya is a gateway to exploring the Chubu region, offering cultural attractions, excellent food, and an efficient transportation network. It's a place where modernity meets tradition, and visitors can discover hidden gems often missed by tourists.",
                'content2' => '',
                'content3' => '',
                'content4' => '',
                'notes' => '',
                'url' => 'https://maps.geoapify.com/v1/staticmap?style=klokantech-basic&width=600&height=400&center=lonlat:136.923771,35.13657&zoom=10.9504&apiKey=33d331351aed4318a15dfdd3ef901fc5',
                'travel_guides' => "Nagoya, a city in the Chubu region, may not be as well-known as some of Japan's major cities, but it has its own unique charm. Start your exploration at Nagoya Castle, where you can admire the historic architecture and learn about the city's history. Visit the Toyota Commemorative Museum of Industry and Technology to delve into Japan's automotive legacy. Osu Kannon Temple and Osu Shopping Street offer a blend of spirituality and shopping, with traditional markets and unique stores. Nagoya's cuisine is characterized by hitsumabushi (grilled eel over rice) and the local specialty of miso katsu. The city provides a gateway to exploring the Chubu region, with its cultural attractions, hot springs, and easy access to nearby cities like Kyoto and Osaka.

                Each of these cities offers a distinct experience, whether you're interested in history, cuisine, nature, or modern entertainment. They are all part of what makes Japan such a diverse and fascinating country to explore.",
                'itinerary' => '<h1 class="text-3xl font-bold text-center mt-8">Travel Guides and Itineraries for Nagoya</h1>
                <div class="max-w-lg mx-auto my-8">
                    <!-- Day 1 -->
                    <div class="bg-white rounded-lg shadow-md overflow-hidden p-4">
                        <h2 class="text-xl font-semibold">Day 1: Exploring Nagoyas Cultural Treasures</h2>
                        <p>Visit the magnificent Nagoya Castle, a historic Japanese castle.</p>
                        <p>Explore the beautiful Hommaru Palace located within the castle grounds.</p>
                        <p>Discover the Osu Kannon Temple and its vibrant shopping streets.</p>
                        <p>Try traditional Nagoya dishes like hitsumabushi or kishimen for dinner.</p>
                    </div>
                
                    <!-- Day 2 -->
                    <div class="bg-white rounded-lg shadow-md overflow-hidden p-4 mt-4">
                        <h2 class="text-xl font-semibold">Day 2: Modern Nagoya and Shopping</h2>
                        <p>Visit the impressive Nagoya TV Tower and enjoy panoramic views of the city.</p>
                        <p>Explore the Oasis 21 complex and its futuristic architecture.</p>
                        <p>Shop for souvenirs and trendy fashion in Sakae district.</p>
                        <p>Sample some local street food at the Nagoya International Street Food Village.</p>
                    </div>
                
                    <!-- Day 3 -->
                    <div class="bg-white rounded-lg shadow-md overflow-hidden p-4 mt-4">
                        <h2 class="text-xl font-semibold">Day 3: Nagoyas Art and Gardens</h2>
                        <p>Visit the Nagoya City Art Museum and appreciate its impressive art collection.</p>
                        <p>Take a leisurely stroll in the beautiful Shirotori Garden, known for its tranquility.</p>
                        <p>Explore the Nagoya Science Museum for interactive exhibits and fun for all ages.</p>
                        <p>End your day with a dinner at one of Nagoyas famous yakiniku restaurants.</p>
                    </div>
                </div>'
            ],
            // Add more city data as needed.
        ];

        foreach ($citiesData as $data) {
            Cities::create($data);
        }
    }
}
