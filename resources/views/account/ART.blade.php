@extends('layouts.app')
@section('content')

  <div id="portfolio" class="portfolio-area section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-header wow fadeInDown" data-wow-delay="0.2s">

            {!! Form::open(array('rout' => 'queries.search', 'class'=>'form navbar-form navbar-right searchform')) !!}
            {!! Form::text('search', null,array('class'=>'form-control','placeholder'=>'search by product name')) !!}
            {!! Form::submit('Search',array('class'=>'btn btn-default')) !!}
         {!! Form::close() !!}

          </div>
        </div>
      </div>

      <div class="row">
        <div class="portfolio-items">
          @foreach($categories as $category)
            <div >
              <div >
                <i></i>

                  <a href="#">
                    <!-- <br><br><br><br><br><br><br><br><br><br> -->
                        <h2>{!!$category->title!!}</h2>
                  <a/>

                    @foreach($articles as $article)
                      <?php
                        if(foo($article)==$category->id){
                          echo "<div class='col-md-4 col-sm-6 col-xs-12 no-pad'>          
                                  <div id='inline-popups' class='port-box'>
                                    <a data-effect='mfp-zoom-out'>
                                      <div class='hovereffect'>
                                        <img src='/temp/images/portfolio/port1.png' alt='portfolio image' class='img-responsive'>
                                          <div class='overlay'>
                                            <h2>$article->title</h2><p>$article->full_text</p>
                                          </div>
                                      </div>
                                    </a>                            
                                  </div>
                                </div>

                                <div class='row'>
                                  <div class='col-md-5 col-xs-12'>
                                    <div class='por-text'>
                                      <h4>$article->title</h4>
                                          <div class='por-text-details'>
                                            <div>
                                              <div>
                                                <p>Короткое описание: $article->short_text</p>
                                                <p>Полное описание:$article->full_text</p>
                                                <p>Связь с продавцом:$article->author</p>
                                              </div>
                                            </div>
                                          </div>                                      
                                    </div>
                                  </div>
                                </div>";}
                        ?>
                    @endforeach
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>

                            
                      


<?php
function foo($article)
{
  $a =  $article->categories_id;
    return $a;
}

function printTitle($article)
{
  $Title =  $article->id;
  return $Title;
   //return $Title;
}

function printShort_text($article)
{
  $Short_text =  $article->short_text;
    return $Short_text;
}

?>
@stop