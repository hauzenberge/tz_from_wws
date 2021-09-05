@extends('layouts.app')

@section('content')
    <section class="index-section2" >
         <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="img-wrapper">
                                <img src="{{asset('img/index-s2.jpg')}}" alt="" class="wow zoomIn" data-wow-duration="1s" data-wow-delay="0s">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="section-content">
                                <h2 class="section-title">{{$post->title}}</h2>
                                 <strong>Category: <a href="#">{{$post->category}}</a></strong> 
                                {!! $post->text!!}
                            </div>
                        </div>
                    </div>
         </div>
    </section>
@endsection