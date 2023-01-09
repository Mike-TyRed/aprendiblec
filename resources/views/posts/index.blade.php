<x-layouts.app title="Blog" meta-description="Blog meta description">

    <div>
        <div class="flex justify-center item-center mt-5">
            <strong class="text-lg">Lista de posts</strong>
        </div>

        <div class="flex justify-center items-center">
            <div class="rounded-3xl p-10 shadow-lg w-fit text-lg">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <td class="p-3 whitespace-nowrap">Titulo</td>
                            <td class="p-3 whitespace-nowrap">Contenido</td>
                            <td class="p-3 whitespace-nowrap">Acciones</td>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($posts as $post)
                            <tr>
                                <td class="p-3">{{ $post->title }}</td>
                                <td class="p-3">{{ $post->body }}</td>
                                <td class="flex flex-row p-3">
                                    <div><a class="bg-yellow-400 rounded-3xl p-1 hover:bg-yellow-500 shadow-md"
                                            href="{{ route('posts.edit', $post) }}">Editar</a></div>
                                    <form action="{{ route('posts.destroy', $post) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button
                                            class="bg-red-500 rounded-3xl p-1 ml-2 hover:bg-red-700 shadow-md text-indigo-50"
                                            type="submit">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
                <div class="flex justify-center item-center"><a
                        class="bg-green-500 text-indigo-50 mt-2 rounded-3xl p-1 shadow-md"
                        href="{{ route('posts.create') }}">Nuevo post</a></div>

            </div>
        </div>
    </div>

</x-layouts.app>
