<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- リセットCSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.1/normalize.css">
    <!-- BootStrap読み込み app.cssはresourceフォルダ内（コンパイル前なので）-->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <!-- BootStrapここまで -->

    <!--自作CSS publicフォルダ内（コンパイル不要なので） ※BootStrap読み込みより下に記述することで、優先度高-->
    <link rel="stylesheet" href="{{ asset('/css/topstyle.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/price.css') }}">
    <!-- Googleフォント -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Zen+Maru+Gothic&display=swap" rel="stylesheet">

    <title>ハムスター専門ペットショップ｜はむはむハウス</title>
</head>

<body class="subpage">
    <header>
        <!-- ナビ -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <a class="navbar-brand" href="/top">はむはむハウス</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            {{-- <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent"> --}}
            <div class="collapse navbar-collapse justify-content-md-center" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Top</a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link" href="#new">新着情報</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#type">ハムスターの種類</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#goods">飼育グッズ</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/price">飼育費用は？</a>
                    </li>

                    <!-- ドロップダウンタイプ -->
                    {{-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Reserve
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">予約明細</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </li> --}}
                    <!-- ドロップダウンタイプここまで -->


                    <li class="nav-item">
                        <a class="nav-link" href="#access">店舗紹介</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link adminbtn" href="#contact">お問合わせ</a>
                    </li>


                </ul>
            </div>
        </nav>
    </header>



    <div class="contents">
        <!-- 子bladeを挿入する部分 -->
        @yield('contents')
    </div>



    <footer>
        <div class="container footer">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/">Top</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#new">新着情報</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#type">ハムスターの種類</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#goods">飼育グッズ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#price">飼育費用は？</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#access">店舗紹介</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">お問合わせ</a>
                </li>
            </ul>
            <p>〒000-0000 大阪府大阪市000-00<br>
                TEL：0000-00-0000 / FAX：0000-00-0000</p>
        </div>

        <div class="container address">
            <address>&copy; はむはむハウス 2023 All Rights Reserved.</address>
        </div>
    </footer>

    <!-- Bootstrap、jQuery読み込み-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js"
        integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous">
    </script>

    <script>
        jQuery(function($) {
            $('section').addClass('fadeIn');
            $(window).on('load scroll', function() {

                var box = $('.fadeIn');
                var animated = 'animated';

                box.each(function() {

                    var boxOffset = $(this).offset().top;
                    var scrollPos = $(window).scrollTop();
                    var wh = $(window).height();

                    if (scrollPos > boxOffset - wh + 100) {
                        $(this).addClass(animated);
                    }
                });
            });
        })
    </script>

</body>