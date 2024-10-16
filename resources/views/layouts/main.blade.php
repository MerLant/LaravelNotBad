<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(["resources\css\app.css", "resources\js\app.js"])
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 font-sans text-gray-800">

    <!-- Header -->
    <header class="bg-white shadow-md">
        <div class="container mx-auto px-4 py-4">
            <nav class="flex justify-between items-center">
                <div class="text-lg font-bold text-gray-700">
                    <a href="{{route('home')}}">Главная</a>
                </div>
                <div class="space-x-4">
                    <a href="{{route('array')}}" class="text-gray-600 hover:text-blue-500">Список</a>
                    <a href="{{route('reports')}}" class="text-gray-600 hover:text-blue-500">Репорты</a>
                </div>
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container mx-auto px-4 py-8">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-4">
        <div class="container mx-auto text-center">
            &copy; Лапаев Никита Юрьевич 2005
        </div>
    </footer>

</body>

</html>
