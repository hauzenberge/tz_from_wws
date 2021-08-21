<!doctype html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @if(count($seos) > 0)
        @foreach($seos as $seo)
            @if($seo->title != null)
                <title>{{$seo->title}}</title>
            @endif

            @if($seo->keywords != null)
                <meta name="keywords" content="{{$seo->keywords}}" />
            @endif

            @if($seo->description != null)
                <meta name="description" content="{{$seo->description}}" />
            @endif

        @endforeach
    @endif
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
                    @if(count($header_logos) > 0)
                        @foreach($header_logos as $header_logo)
                            <img src="{{asset($header_logo->src)}}" alt="">
                        @endforeach
                    @endif
                    
                </a>
            </div>
            <div class="col-lg-8 col-3">
                <ul class="header-nav">    
                    @if ($header_menu_items)
                        @foreach ($header_menu_items as $header_menu_item)
                            <li>
                                <a href="{{url($header_menu_item->href)}}">{{$header_menu_item->title}}</a>
                                
                                @if (count(App\Models\Menu\BlogHeaderSubMenu::where('menu_id', '=', $header_menu_item->id)->get()) > 0)
                                    <div class="sub-menu">
                                        <ul>
                                            @foreach (App\Models\Menu\BlogHeaderSubMenu::where('menu_id', '=', $header_menu_item->id)->get() as $header_sub_menu_item)
                                                @if ($header_sub_menu_item->menu_id == $header_menu_item->id)
                                                    <li><a href="{{$header_sub_menu_item->href}}">{{$header_sub_menu_item->title}}</a></li>
                                                @else
                                                    <li><a href="#" style="color:white;">{{$header_menu_item->title}}</a></li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                            </li>
                       @endforeach
                    @endif               
                                    
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
            @if(count($header_texts) > 0)
                        @foreach($header_texts as $header_text)

                            <div class="col-12">
                                <div class="section-container">
                                    <div class="article">
                                        <h1 class="title">
                                            {{$header_text->title}}
                                        </h1>
                                        <span class="sub-title">{{$header_text->sub_title}}</span>
                                    </div>
                                    <a href="" class="link">{{$header_text->link}}<i class="icon-right-arrow"></i></a>
                                </div>
                            </div>
                        @endforeach
            @endif   

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
                    @if(count($footer_logos) > 0)
                        @foreach($footer_logos as $footer_logo)
                            <a href="{{url('/')}}"><img src="{{asset($footer_logo->src)}}" alt=""></a>
                        @endforeach
                    @endif
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
                <div class="text label">KONTAKTS</div>
                @if(count($contacts) > 0)
                        @foreach($contacts as $contact)
                             <div class="text label">{{$contact->name}}</div>
                            <ul>
                                <li><a href="{{$contact->city_link}}" class="text">{{$contact->city}}</a></li>
                                <li><a href="{{$contact->adress_link}}" class="text">{{$contact->adress}}</a></li>
                                <li><a href="tel:{{$contact->phone}}" class="text">{{$contact->phone}}</a></li>
                                <li><a href="mailto:{{$contact->email}}" class="text">{{$contact->email}}</a></li>
                            </ul>
                        @endforeach
                @endif
            </div>
            <div class="col-12">
                <div class="rights">
                    @if(count($contacts) > 0)
                        @foreach($copywrites as $copywrite)
                             <div class="text">{{$copywrite->about}}</div>
                        @endforeach
                    @endif
                    
                </div>
            </div>
        </div>
    </div>
</footer>

</body>
</html>