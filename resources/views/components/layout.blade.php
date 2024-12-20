<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Leben in Deutschland </title>
    <link rel="icon" type="image/x-icon" href="favicon.png">
</head>

<body class="mx-auto max-w-6xl flex flex-col min-h-screen pt-8">
    <x-header />
    <div class="flex-grow mt-20">
        {{ $slot }}
    </div>
    <x-footer class="w-full" />
</body>


</html>
