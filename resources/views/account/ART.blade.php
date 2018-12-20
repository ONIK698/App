@extends('layouts.app')
@section('content')

  <div id="portfolio" class="portfolio-area section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-header wow fadeInDown" data-wow-delay="0.2s">
            <p class="line-one"></p>
            <h2>My Works</h2>
            <p class="line-one"></p>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="portfolio-items">
@foreach($articles as $article)
                    <div class="col-md-4 col-sm-6 col-xs-12 no-pad">          
                        <div id="inline-popups" class="port-box">
                          
                            <a href="#test-popup" data-effect="mfp-zoom-out">
                                <div class="hovereffect">

                                    <img src="/temp/images/portfolio/port1.png" alt="portfolio image" class="img-responsive"> <!--edit image-->
                                    <div class="overlay">
                                        <h2>{!!$article->title!!}</h2> <!--your project name-->
                                        <p>{!!$article->full_text!!}</p>
                                    </div>
                                </div>
                            </a>                            
                        </div>
                        </div>
@endforeach
          </div>
        </div>
                            </div>
                        </div>
@stop