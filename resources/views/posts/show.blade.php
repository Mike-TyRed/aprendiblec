<x-layouts.app :title="$post->title" :meta-description="$post->body">

    <div class="mt-5 flex justify-center items-center">
        <div class="rounded-3xl p-10 shadow-lg text-lg">

            <div class="">
                <strong>Titulo</strong>
                <br>
                {{ $post->title }}
            </div>

            <div>
                <strong>Cuerpo</strong>
                <br>
                <p>{{ $post->body }}</p>
            </div>

            <div class="flex justify-center">
                <a class="bg-gray-500 hover:bg-gray-600 shadow-md mt-2 rounded-xl text-center w-16 text-indigo-50" href="{{ route('posts.index') }}">Return</a>
            </div>
        </div>
    </div>

</x-layouts.app>
