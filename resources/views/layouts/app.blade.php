<!doctype html>
<html lang="de">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        {!! App\Helpers\Header::SEO() !!}

        <link rel="shortcut icon" href="{{asset('img/favicon.png')}}" type="image/x-icon">
        <link rel="stylesheet" href="{{asset('css/main.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/animate.min.css')}}">
        <script src="{{asset('js/wow.min.js')}}"></script>
        <script src="{{asset('js/main.min.js')}}"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
        <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    </head>
    <body>
            <header class="page-header">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-4 col-9">
                            <a href="{{url('/')}}" class="logo"> 
                                {!! App\Helpers\Header::Logo('header') !!}
                            </a>
                        </div>
                        <div class="col-lg-8 col-3">
                            <ul class="header-nav">    
                                
                                <br>
                                {!! App\Helpers\Header::HeaderMenu() !!}
                            </ul>
                            <div class="burger-btn">
                                <span class="icon-menu-square-button"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mobile_menu">
                    <div class="icon-cross"></div>
                </div>
            </header>

            <section class="header-section wow zoomIn" data-wow-duration="1s" data-wow-delay="0s">

                <div class="container">
                    <div class="row align-items-end">            
                        {!! App\Helpers\Header::HeaderText() !!}  
                    </div>
                </div>

            </section>

            @yield('content')

            <footer class="page-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-12 col-sm-6 col-12 mob-col">
                            <p class="text">
                                Die starke Kooperation in der Ausbildung
                                von Verkaufs- und Vertriebsleitern
                            </p>
                            <div class="logos-wrap">
                                {!! App\Helpers\Header::Logo('footer') !!}
                            </div>
                            <strong class="strong-text">NUTZEN SIE IHRE CHANCE!</strong>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-6 col-12">
                            <div class="text label">Info</div>
                            <ul>
                                <li><a href="" class="text">Kontakt </a></li>
                                <li><a href="" class="text">Impressum</a></li>
                                <li><a href="" class="text">Datenschutz</a></li>
                                <li><a href="" class="text">AGB</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-4 col-md-5 col-sm-6 col-12">
                            <div class="text label">WEITERBILDUNGSPROGRAMME</div>
                            <ul>
                                <li><a href="" class="text">Vertriebsleiterausbildung (IHK) </a></li>
                                <li><a href="" class="text">Geprüfter Vertriebsleiter (CEA)</a></li>
                                <li><a href="" class="text">Trainer für betriebliche Weiterbildung (IHK)</a></li>
                                <li><a href="" class="text">Management- und Führungstrainer (IHK)</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                            {!! App\Helpers\Footer::Contacts() !!}
                        </div>
                        {!! App\Helpers\Footer::CopyWrite(1) !!}
                    </div>
                </div>
            </footer>
    </body>
</html>