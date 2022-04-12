@extends('post.layout')

@section('content')
    <h2 class="text-success">Создание поста</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li class="text-danger">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Заголовок</label>
            <input name="title" type="text" class="form-control" id="title" value="{{ old('title') }}">
        </div>

        <div class="form-group">
            <label for="text">Контент</label>
            <textarea name="text" id="text" class="form-control">{{ old('text') }}</textarea>
        </div>

        <div class="form-group">
            <label for="image">Фотография</label>
            <input name="image" type="file" class="form-control" id="image">
        </div>

        <button type="submit" class="btn btn-success">Создать</button>
    </form>
@endsection
