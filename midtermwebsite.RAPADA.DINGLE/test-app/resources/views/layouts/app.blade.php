<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>AIE Creates</title>

        <head>
        <head>
    <!-- ... existing head content ... -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
</head>

    <!-- ... existing head content ... -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap">
</head>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    </head>
    <body class="antialiased">
                <header class="text-gray-600 body-font">
            <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
                <a href="/" class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
                <div class="w-10 h-10 bg-indigo-500 rounded-full overflow-hidden">
                <img src="{{ asset('images/logo.jpg') }}" alt="Darwin Dingle" class="w-full h-full object-cover">
            </div>
                <span class="ml-3 text-xl">AIE Creates</span>
                </a>
                <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
                </nav>
              
            </div>
            </header>
            <main class="max-w-7xl mx-auto">
            {{ $slot }}
            </main>
         
    </body>
</html>
