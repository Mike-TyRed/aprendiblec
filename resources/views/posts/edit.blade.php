<x-layouts.app title="Crear nuevo post" meta-description="Formulario para crear nuevo post">

    <div class="mt-5 flex justify-center items-center"><strong class="text-lg">Editar post</strong></div>

    <div class="mt-5 flex justify-center items-center">
        <div class="rounded-3xl p-10 shadow-lg text-lg">

            <form action="{{ route('posts.update', $post) }}" method="POST">

                @csrf @method('PATCH')

                @include('posts.form')

                <div class="flex justify-center">
                    <button class="bg-green-500 hover:bg-green-600 text-indigo-50 mt-2 rounded-3xl w-16 shadow-md"
                        type="submit">Save</button>
                </div>
                <div class="flex justify-center">
                    <a class="bg-gray-500 hover:bg-gray-600 shadow-md mt-2 rounded-3xl text-center w-16 text-indigo-50"
                        href="{{ route('posts.index') }}">Return</a>
                </div>

            </form>
        </div>
    </div>

</x-layouts.app>
