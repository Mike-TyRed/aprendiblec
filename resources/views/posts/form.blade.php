<input name="title" type="text" placeholder="Title" value="{{ old('title', $post->title) }}">

@error('title')
    <br>
    <small style="color:red">{{ $message }}</small>
@enderror

<br>
<textarea name="body" type="text" placeholder="Body">{{ old('body', $post->body) }}</textarea>

@error('body')
    <br>
    <small style="color:red">{{ $message }}</small>
@enderror
