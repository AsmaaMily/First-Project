<!DOCTYPE html>
<html lang="ar" dir="rtl" data-theme="black">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>عصفور</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Noto+Naskh+Arabic:wght@400..700&display=swap" rel="stylesheet">

</head>

<body class="font-['Noto_Naskh_Arabic'] max-w-4xl mx-auto px-4 min-h-screen flex flex-col">
    {{$slot}}

</body>

</html>