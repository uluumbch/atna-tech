<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hero Page with YouTube Background</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="overflow-hidden">

    <!-- Hero Section -->
    <div class="relative h-screen flex items-center justify-center text-white overflow-hidden">

        <!-- YouTube Video Background -->
        <div class="absolute top-0 left-0 w-screen h-full z-0">
            <iframe 
                src="https://www.youtube.com/embed/FdZd-kLy06w?autoplay=1&mute=1&loop=1&controls=0&playlist=FdZd-kLy06w" 
                frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                referrerpolicy="strict-origin-when-cross-origin" 
                allowfullscreen
                class="w-full h-full object-cover"
            ></iframe>
        </div>

        <!-- Overlay to darken the video background -->
        <div class="absolute top-0 left-0 w-full h-full bg-black bg-opacity-50 z-10"></div>

        <!-- Hero Content -->
        <div class="relative z-20 text-center">
            <h1 class="text-5xl font-bold mb-4">Inovasi Terdepan untuk mendukung Pertumbuhan Bisnis Anda</h1>
        </div>

    </div>

</body>
</html>