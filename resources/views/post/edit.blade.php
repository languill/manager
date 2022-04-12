@extends('post.layout')

@section('content')
    <h2 class="text-success">Редактирование поста</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li class="text-danger">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('post.store', ['id' => $post->id]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Заголовок</label>
            <input name="title" type="text" class="form-control" id="title" value="{{ $post->title }}">
        </div>

        <div class="form-group">
            <label for="text">Текст</label>
            <textarea name="text" id="text" class="form-control">{{ $post->text }}</textarea>
        </div>

        <div class="form-group">
            <label for="image">Фотография</label>
            <img src="/{{ $post->image }}" class="img-thumbnail" style="width:100px">
            <input name="image" type="file" class="form-control" id="image">
        </div>

        <button type="submit" class="btn btn-success">Изменить</button>
    </form>
@endsection
