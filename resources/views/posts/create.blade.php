<x-layouts.app title="Crear nuevo post" meta-description="Formulario para crear nuevo post">

    <h1>New post</h1>

    <div>
        <div>

            <form action="{{ route('posts.store') }}" method="POST">

                @csrf
                
                @include('posts.form')

                <br>
                <button type="submit">Save</button>
                <br>
                <a href="{{ route('posts.index') }}">Return</a>

            </form>
        </div>
    </div>

</x-layouts.app>
