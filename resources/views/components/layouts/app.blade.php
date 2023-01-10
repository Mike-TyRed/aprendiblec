<script src="https://cdn.tailwindcss.com"></script>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Elden Ring - {{ $title ?? '' }}</title>
    <meta name="description" content="{{ $metaDescription ?? 'Default meta description' }}" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    {{-- Muestra la barra de navegacion --}}
    <x-layouts.navigation />

    {{-- Muestra un mensaje de post creado --}}
    <x-layouts.messages />

    {{-- Muestra el contenido de la pagina --}}
    {{ $slot }}

</body>

</html>
