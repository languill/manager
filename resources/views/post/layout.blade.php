<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <script src="{{ asset('tinymce/tinymce.min.js') }}"></script>
    <!-- TinyMCE -->
    <script>
        tinymce.init({
            selector: '#text',
            language: 'ru',
        });
    </script>
    <!-- .TinyMCE -->

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

            @yield('content')


        </div>
    </div>
</div>

<script src="{{ asset('js/scripts.js') }}"></script>
</body>
</html>
