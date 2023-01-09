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
    @if (session('yellow'))
        <div class="flex justify-center ml-5 mt-5">
            <div class="rounded-xl bg-yellow-500 text-white w-fit h-fit p-1 shadow-md">
                {{ session('yellow') }}
            </div>
        </div>
    @endif

    @if (session('red'))
        <div class="flex justify-center ml-5 mt-5">
            <div class="rounded-xl bg-red-500 text-white w-fit h-fit p-1 shadow-md">
                {{ session('red') }}
            </div>
        </div>
    @endif

    @if (session('green'))
        <div class="flex justify-center ml-5 mt-5">
            <div class="rounded-xl bg-green-500 text-white w-fit h-fit p-1 shadow-md">
                {{ session('green') }}
            </div>
        </div>
    @endif

    {{-- Muestra el contenido de la pagina --}}
    {{ $slot }}

</body>

</html>
