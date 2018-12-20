@extends('layouts.app')
@section('articles')

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
@foreach($categories as $category)
                    <div class="col-md-4 col-sm-6 col-xs-12 no-pad">          
                        <div id="inline-popups" class="port-box">
                          
                            <a href="#test-popup" data-effect="mfp-zoom-out">
                                <div class="hovereffect">

                                    <img src="/temp/images/portfolio/port1.png" alt="portfolio image" class="img-responsive"> <!--edit image-->
                                    <div class="overlay">
                                        <h2>{!!$category->title!!}</h2> <!--your project name-->
                                        <p>{!!$category->description!!}</p>
                                    </div>
                                </div>
                            </a>                            
                        </div>
                        </div>
@endforeach
          </div>
        </div>
                        
                        <div id="test-popup" class="white-popup mfp-with-anim mfp-hide">
                            <div class="row">
                                <div class="col-md-7 col-xs-12">
                                    <div class="por-img">
                                        <img src="/temp/images/portfolio/port1.png" alt="portfolio image" class="img-responsive"> <!--edit image-->
                                    </div>
                                </div>
                                <div class="col-md-5 col-xs-12">
                                    <div class="por-text">
                                        <h2>My Project Title</h2> <!--your project title-->
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam, delectus deserunt eum eveniet, illo iste magni nobis non omnis quia</p>
                                        <div class="por-text-details">
                                            <div class="row">
                                                <div class="col-xs-4">
                                                    <p>Client: </p>
                                                    <p>Completed:</p>
                                                    <p>Type:</p>
                                                    <p>link:</p>
                                                </div>
                                                <div class="col-xs-offset-1 col-xs-7">
                                                    <p>{!!$category->title!!}</p> <!--edit here-->
                                                    <p>15/03/2018</p> <!--edit here-->
                                                    <p>WordPress Site</p> <!--edit here-->
                                                    <p>www.reebok.com</p> <!--edit here-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                                
                            </div>
                        </div>
@stop