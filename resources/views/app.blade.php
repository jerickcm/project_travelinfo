<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title inertia>{{ config('app.name', 'Application') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    @routes
    @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
    @inertiaHead

</head>

<body class="font-sans antialiased bg-gray-100">
<!--


    / \__
    (    @\___
    /         O
   /   (_____/
 /_____/   U
 

-->

<!-- 
  ____                   _       _           _   _     _     _     _             
 / ___| ___   ___   __ _| |__   | |__   __ _| | / /__  | |__ | |__  / \  ___  ___ 
| |  _ / _ \ / _ \ / _` | '_ \  | '_ \ / _` | |/ / _ \ | '_ \| '_ \| | |/ _ \/ _ \
| |_| | (_) | (_) | (_| | | | | | | | | (_| |   <  __/ | | | | | | | | |  __/  __/
 \____|\___/ \___/ \__, |_| |_| |_| |_|\__, |_|\_\___| |_| |_|_| |_|_|\___|\___|
                   |___/            |___/
-->

    <script>
        window.appVersion = "<?php echo config('custom.app_version'); ?>";
    </script>

    @inertia
</body>

</html>
