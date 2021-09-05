@extends('layouts.app')

@section('content')
<section class="index-section2" >
    @if(count($whears) > 0)
        @foreach($whears as $wheare)
             <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="img-wrapper">
                            <img src="{{asset($wheare->img_src)}}" alt="" class="wow zoomIn" data-wow-duration="1s" data-wow-delay="0s">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="section-content">
                            <h2 class="section-title">{{$wheare->title}}</h2>
                            {!! $wheare->text!!}
                        </div>
                    </div>
                </div>
    </div>

        @endforeach
    @endif
</section>

<section class="index-section5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="section-title center">3 Schritte zu Ihrem vertrieblichen Bildungsabschluss:</h2>
            </div>

            @if(count($stepssales) > 0)
                @foreach($stepssales as $stepssale)
                    <div class="col-md-4">
                        <div class="item-wrap wow slideInUp" data-wow-duration="2s" data-wow-delay="0s">
                            <div class="icon">
                                <span class="{{$stepssale->icon}}"></span>
                            </div>
                            <p class="text">
                                {!! $stepssale->text !!}
                            </p>
                            <a href="{{$stepssale->link}}" class="btn active">loslegen</a>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>        
    </div>
</section>

<section class="contact-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="contact-wrapper  wow zoomIn" data-wow-duration="1s" data-wow-delay="0s">
                    <div class="contact-info">
                        <img src="{{asset('img/contact.jpg')}}" alt="">
                        <div class="contact-block">
                            <p class="text">
                                Klaus Schwarz freut sich auf Ihren Anruf unter Telefon:
                            </p>
                            <a href="tel:4961044099846"><strong>+49 6104 4099846</strong></a>
                        </div>
                    </div>
                    <form class="contact-form" method="put" enctype="multipart/form-data" action="{{ url('/response/')}}" autocomplete="off">
                        <h3 class="section-title">Nutzen Sie Ihre Chance!</h3>
                        <p class="text">
                            Wir helfen Ihnen gerne bei der Auswahl der für Sie passenden Weiterbildung.
                        </p>
                        <div class="form_field"><input type="text" name="name" placeholder="Ihr Name"></div>
                        <div class="form_field"><input type="email" name="email" placeholder="Ihre E-Mail"></div>
                        <div class="form_field"><input type="text" name="phone" placeholder="Ihre Telefonnummer"></div>
                        <div class="form_field">
                            <textarea name="message" placeholder="Ihre Nachricht"></textarea>
                        </div>
                        <button class="btn active">Nachricht senden</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</section>

<section class="index-section9">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="section-title center wow slideInUp" data-wow-duration="1s" data-wow-delay="0s">Für Sie interessante Veranstaltungen</h2>
                <p class="text center subtitle wow slideInUp" data-wow-duration="1s" data-wow-delay="0s">
                    Trainings & Seminare
                </p>
                <div class="events_slider wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
                    @if(count($siedbars) > 0)
                        @foreach($siedbars as $siedbar)
                            <div class="event_item">
                                <div class="event_item-wrapper">
                                    <strong class="event_item-category">{{$siedbar->category}}</strong>
                                    <p class="event_item-title"><h2>{{$siedbar->title}}</h2></p>
                                    <p class="event_item-description">
                                        {!! substr($siedbar->text, 0, 150)  !!}
                                    </p>

                                    <div class="event_item-event-data">
                                        <div class="icon-wrap">
                                            <span class="icon-calendar"></span>
                                        </div>
                                        <span class="text">{{$siedbar->created_at}}</span>
                                    </div>

                                </div>
                                <a href="{{url('/post/'.$siedbar->id)}}" class="btn active">Weiterlesen</a>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>

@endsection