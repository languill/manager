<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>Регистрация</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto mt-5 text-center">
                <h1 class="text-primary mb-5">Регистрация</h1>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li class="text-danger">{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif


                <form method="post" action="{{ route('register.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="name">Имя</label>
                        <input name="name" id="name" type="text" class="form-control"
                               placeholder="Имя" value="{{ old('name') }}">
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input name="email" id="email" type="text" class="form-control"
                               placeholder="your-email@mail.ru" value="{{ old('email') }}">
                    </div>

                    <div class="form-group">
                        <label for="password">Пароль</label>
                        <input name="password" id="password" type="password" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="password_confirmation">Подтверждение пароля</label>
                        <input name="password_confirmation" id="password_confirmation" type="password" class="form-control">
                    </div>

                    <button class="btn btn-primary" type="submit">Регистрация</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
