<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>Вход в систему</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-6 mx-auto mt-5 text-center">
            <h1 class="text-primary mb-5">Вход в систему</h1>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li class="text-danger">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if (session('success'))
                <div class="alert alert-success p-3">
                    {{ session('success') }}
                </div>
            @endif

            @if (session('error'))
                <div class="alert alert-danger p-3">
                    {{ session('error') }}
                </div>
            @endif

            <form method="post" action="{{ route('login') }}">
                @csrf

                <div class="form-group">
                    <label for="email">Email</label>
                    <input name="email" id="email" type="text" class="form-control"
                           placeholder="your-email@mail.ru" value="{{ old('email') }}">
                </div>

                <div class="form-group">
                    <label for="password">Пароль</label>
                    <input name="password" id="password" type="password" class="form-control">
                </div>

                <button class="btn btn-primary" type="submit">Войти</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>
