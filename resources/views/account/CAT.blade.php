@extends('layouts.app')
@section('content')

    <div class="contact-area section-padding" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header wow fadeInDown" data-wow-delay="0.2s">
                        <a href="{{route('register')}}">
                        <p class="line-one"></p>
                        <h2>Contact</h2>
                        <p class="line-one"></p>
                    </a>
                    </div>
                </div>
            </div>

            <div class="row">
                @foreach($categories as $category)
                <div class="col-md-3 col-sm-6">
                    <div class="single-contact text-center wow fadeInDown" data-wow-delay="0.4s">
                        <i class="fa fa-home"></i>
                        <a href="{{route('art')}}">
                            <h2>{!!$category->title!!}</h2>
                        <a/>
                        <!-- <p>{!!$category->description!!}</p> -->
                    </div>
                </div>
                @endforeach
            </div>

            
        </div>
    </div>

@stop 