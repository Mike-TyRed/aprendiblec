<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    //Muestra todos los posts
    public function index()
    {
        //Obtenemos todos los posts existentes para mostrarlos
        $posts = Post::get();
        return view('posts.index', ['posts' => $posts]);
    }

    //Crea un nuevo post
    public function create()
    {
        //Llma la funcion para crear un nuevo post
        return view('posts.create', ['post' => new Post]);
    }

    //Guarda los datos en la base de datos
    public function store(PostRequest $request)
    {
        //Guardar los datos ingresados en el formulario
        Post::create($request->validated());
        
        return to_route('posts.index')->with('status', 'Nuevo post creado correctamente!');
    }

    //Muestra un post en especifico
    public function show(Post $post)
    {
        //Muestra individualmente la informacion de un post
        return view('posts.show', ['post' => $post]);
    }

    //Edita los post existentes
    public function edit(Post $post)
    {
        return view('posts.edit', ['post' => $post]);
    }

    //Actualizan los post de la base de datos
    public function update(Request $request, Post $post)
    {
        //Guardar los datos ingresados en el formulario
        $post->update($request->validated());

        return to_route('posts.show', $post)->with('status', 'Post actualizado correctamente!');
    }

    //Elimina un post de la base de datos
    public function destroy(Post $post)
    {
        $post->delete();

        return to_route('posts.index')->with('status', 'Post eliminado correctamente!');
    }
}
