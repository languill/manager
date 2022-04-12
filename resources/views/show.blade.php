<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Менеджер по продукту, маркетолог, программист</title>
    <link rel="stylesheet" href="{{ asset('icons/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
<section id="companies">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="section-title pb-3">{{ $post->title }}</h3>
                <div class="text-center">
                    <img src="/{{ $post->image }}" alt="{{ $post->title }}" class="img-fluid img-thumbnail">
                </div>
                <div>
                    {!!  $post->text !!}
                </div>
            </div>
        </div>
    </div>
</section>

<script src="{{ asset('js/scripts.js') }}"></script>
</body>
</html>
