<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Linktree Clone')</title>
    <script src="[https://cdn.tailwindcss.com](https://cdn.tailwindcss.com)"></script>
    <link href="[https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap](https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap)" rel="stylesheet">
    <style> body { font-family: 'Nunito', sans-serif; } </style>
</head>
<body class="bg-gray-100 text-gray-800">
    <div class="container mx-auto px-4 py-8">
        @yield('content')
    </div>
</body>
</html>