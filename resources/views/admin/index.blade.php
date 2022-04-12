<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>Панель администратора</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="navbar-nav">
                    <a class="nav-item nav-link active" href="{{ route('admin.index') }}">Главная</a>
                    @auth
                        <a class="nav-item nav-link" href="{{ route('logout') }}">Выход</a>
                    @endauth
                </div>
            </nav>
            <h1 class="text-primary text-center mb-5">Панель администратора</h1>
            <h5 class="text-primary text-center">Добро пожаловать, {{ $userName }}!</h5>

            <a href="{{ route('posts.create') }}" class="btn btn-success">Создать</a>
            <hr>
            @if (session('success'))
                <div class="alert alert-success p-3">
                    {{ session('success') }}
                </div>
            @endif

            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Название</th>
                            <th scope="col">Картинка</th>
                            <th scope="col">Редактировать</th>
                            <th scope="col">Удалить</th>
                        </tr>
                    </thead>

                    <tbody>
                        @php $i = 1; @endphp
                        @foreach($posts as $post)
                            <tr>
                                <td scope="row">{{ $i }}</td>
                                <td>{{ $post->title }}</td>
                                <td><img src="{{ $post->image}}" class="img-thumbnail" style="width:100px"></td>
                                <td><a href="{{ route('post.edit', ['id' => $post->id]) }}" class="btn btn-warning">Изменить</a></td>
                                <td>
                                    <form action="{{ route('post.delete', ['id' => $post->id]) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" type="submit">Удалить</button>
                                    </form>
                                </td>
                            </tr>
                         @php $i++; @endphp
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>

<div class="d-flex flex-column min-vh-20 mt-5 text-center">
    <footer class="flex-fill text-white">
        {{ $date }}
    </footer>
</div>
<script src="{{ asset('js/scripts.js') }}"></script>
</body>
</html>
