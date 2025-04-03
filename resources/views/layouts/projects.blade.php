<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield("title")</title>
    @vite('resources/js/app.js')
</head>
<body>
    <div class="container">
        <h1 class="text-center mt-5 mb-5">
            @yield("title")
        </h1>
        
            @yield("content")

    </div>
</body>
</html>