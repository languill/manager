<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Менеджер по продукту, маркетолог</title>
    <link rel="stylesheet" href="{{ asset('icons/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
<header>
    <!-- Меню и лого. Начало -->
    <div class="container">
        <div class="row top-block d-flex justify-content-between flex-wrap align-items-center">
            <div class="col-lg-3 col-md-6 text-center">
                <a href="/">
                    <img class="img-fluid" src="img/logo.png" alt="Менеджер по продукту">
                </a>
            </div>

            <div class="col-lg-9 col-md-6 text-center">
                <ul  class="menu scrollto">
                    <li>
                        <a href="#about">обо мне</a>
                    </li>
                    <li>
                        <a href="#projects">работы</a>
                    </li>
                    <li>
                        <a href="#companies">компании</a>
                    </li>
                    <li>
                        <a href="#address">контакты</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Меню и лого. Конец -->

    <!-- Главное фото. Начало -->
    <div class="container main-photo text-center">
        <div class="row">
            <div class="col-md-12">
                <div class="img-block">
                    <img class="img-fluid" src="img/photo1.png" alt="">
                    <div class="titles">
                        <h1>продвижение продуктов, проектов, инноваций</h1>
                        <h2>маркетинг, smm,  реклама</h2>
                    </div>
                </div>
                <div class="more scrollto">
                    <a class="btn-lg btn-dark" href="#about">подробнее</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Главное фото. Конец -->
</header>

<section id="about">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="section-title">обо мне</h3>
                <div class="text-center">
                    <img class="img-fluid img-thumbnail rounded-circle" src="img/my_photo.jpg" alt="Менеджер по продукту">
                    <h1 class="title_name">Имя Фамилия</h1>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam, expedita iusto rerum inventore facilis praesentium eum, atque totam, fuga ut corporis. Quia assumenda velit dignissimos adipisci esse pariatur ipsam facere ad ut eum veritatis sed deserunt, accusamus at alias laborum nulla molestias, voluptates sit eligendi dolor voluptas tempora nam et. Atque doloremque illo, quasi ipsum architecto, corporis saepe a quae aliquid eaque dignissimos. Quidem consectetur illo iste asperiores fugiat nobis possimus debitis voluptates placeat repudiandae explicabo eveniet nulla alias impedit, quaerat molestias? Inventore harum repellat quam perspiciatis? Velit pariatur, maxime repellendus vero voluptas quaerat? Aspernatur rem, nobis ullam quisquam mollitia nam temporibus minima repellendus soluta non nulla, eum obcaecati libero. Ipsa pariatur autem eos sapiente aspernatur, incidunt consectetur commodi velit ea architecto eligendi molestias voluptatibus, voluptas. Illum repellat, atque dolor dolore minima quam. Ad saepe laboriosam cupiditate quis perspiciatis nulla libero, praesentium quia, temporibus exercitationem architecto ex sed sint. Iure maiores quod ipsum, perspiciatis et impedit aspernatur provident eaque similique magnam! Deleniti, at aliquam. Perspiciatis non quisquam voluptatum expedita quam possimus dicta eveniet tenetur magnam deleniti dolorum nihil porro dignissimos tempora laboriosam id, unde nulla velit esse nostrum accusamus in. Incidunt repudiandae, adipisci in eos! Fugit totam excepturi accusamus id.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="projects">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="section-title">работы</h3>
            </div>
            <div class="d-flex flex-wrap justify-content-between align-items-stretch">
                <!-- Ряды фото. Начало -->
                @foreach ($posts as $post)
                    <div class="col-md-3 col-sm-6 pt-3">
                            <img class="img-fluid img-thumbnail rounded" src="{{ $post->image }}" alt="фото">
                        <p><a href="{{ route('show', ['id' => $post->id]) }}">Подробнее...</a></p>
                    </div>
            @endforeach
            <!-- Ряды фото. Конец -->
            </div>
        </div>
    </div>
</section>

<section id="companies">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="section-title pb-3">компании</h3>
            </div>
        </div>

        <div class="row text-center">
            <div class="col-md-2 col-sm-6 company">
                <img class="img-fluid img-thumbnail rounded"  src="img/company1.png" alt="OHE Japan">
            </div>

            <div class="col-md-2 col-sm-6 company">
                <img class="img-fluid img-thumbnail rounded"  src="img/company2.png" alt="Towa Japan">
            </div>

            <div class="col-md-2 col-sm-6 company">
                <img class="img-fluid img-thumbnail rounded"  src="img/company3.png" alt="KENT UK">
            </div>

            <div class="col-md-2 col-sm-6 company">
                <img class="img-fluid img-thumbnail rounded"  src="img/company4.png" alt="VS Россия">
            </div>

            <div class="col-md-2 col-sm-6 company">
                <img class="img-fluid img-thumbnail rounded"  src="img/company5.png" alt="НМТ Россия">
            </div>

            <div class="col-md-2 col-sm-6 company">
                <img class="img-fluid img-thumbnail rounded"  src="img/company6.png" alt="ИННИТ Россия">
            </div>
        </div>
    </div>
    </div>
</section>

<footer id="address">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-12">
                <p class="address">г. Москва</p>
                <p>E-mail: <a href="mailto:prognoz_distr@mail.ru">someoner@mail.ru</a></p>
                <div class="icons">
                    <a href="tel:+79260000000"><i class="fa fa-mobile" aria-hidden="true"></i></a>
                    <a href="https://telegram.im/@someone"><i class="fa fa-telegram" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="{{ asset('js/scripts.js') }}"></script>
</body>
</html>
