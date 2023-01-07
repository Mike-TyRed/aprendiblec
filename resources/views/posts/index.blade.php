<x-layouts.app title="Blog" meta-description="Blog meta description">

    <h1>Blog</h1>

    <div class="flex justify-center items-center">
        <div class="box-border rounded-lg h-fit w-[40%] p-4 shadow-lg text-lg">
            <table class="table-index">
                <thead class="">
                    <tr>
                        <td class="crudTitle">Titulo</td>
                        <td class="crudTitle">Contenido</td>
                        <td class="crudTitle acc">Acciones</td>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->body }}</td>
                            <td class="crudAction">
                                <a class="btn btn-Ed" href="{{ route('posts.edit', $post) }}">Editar</a>
                                <form action="{{ route('posts.destroy', $post) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-Del" type="submit">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>

        </div>
    </div>

    <a href="{{ route('posts.create') }}">New post</a>

</x-layouts.app>
