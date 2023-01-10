<div>
    <strong for="title">Titulo</strong>
    <br>
    <input class=" rounded-lg border" name="title" type="text" value="{{ old('title', $post->title) }}">

    @error('title')
        <br>
        <small style="color:red">{{ $message }}</small>
    @enderror

    <br>
    <strong>Cuerpo</strong>
    <br>
    <textarea class="rounded-lg border p-3" name="body" type="text">{{ old('body', $post->body) }}</textarea>

    @error('body')
        <br>
        <small style="color:red">{{ $message }}</small>
    @enderror
</div>
