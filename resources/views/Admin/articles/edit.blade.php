@extends('layouts.admin')
@section('content')
<?php
   // if(session()->has('errors')){
   //     $errors = session()->get('errors');
   //     foreach ($errors->all(":message") as $message) {
   //         echo $message . "<br>";
   //     }
   //     dd(222);
   // }
?>
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <h1>Редактировать обьявление</h1>
        <br>
        <form method="post">
            {!! csrf_field() !!}
<!--             <p>Выбор категории (ий):<br><select name="categories[]" class="form-control" multiple>
                  @foreach($categories as $category)
                       <option value="{{$category->id}}">{{$category->title}}</option>
                  @endforeach
            </select> </p> -->
        <p>Название товара:<br><input type="text" name="title" value="{{$article->title}}" class="form-control" required> </p>
        <p>Автор:<br><input type="text" name="author" value="{{$article->author}}" class="form-control" required> </p>
        <p>Короткое описание:<br><textarea name="short_text" class="form-control">{!!$article->short_text!!}</textarea></p>
        <p>Полное описание:<br><textarea name="full_text" class="form-control">{!!$article->full_text!!}</textarea></p>
        <!-- <p>Отзывы:<br><textarea name="feedback" class="form-control"></textarea></p> -->
        <br><br>
        <button type="submit" class="btn btn-success" style="cursor: pointer; float: right;">Редактировать</button>
        <a href="/admin/articles"><button type="button" src="/articles" class="btn btn-success" style="cursor: pointer; float: left;">Назад</button></a>
        </form>
    </main>
@stop