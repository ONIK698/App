@extends('layouts.admin')
@section('content')
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <h1>Редактировать категорию</h1>
        <br>
        <form method="post">
            {!! csrf_field() !!}
        <p>Введите наименование категории:<br><input type="text" name="title" value="{{$category->title}}" class="form-control" required> </p>
        <p>Текст категории:<br><textarea name="description" class="form-control">{!!$category->description!!}</textarea></p>
        <button type="submit" class="btn btn-success" style="cursor: pointer; float: right;">Редактировать</button>
        <a href="/admin/categories"><button type="button" src="/articles" class="btn btn-success" style="cursor: pointer; float: left;">Назад</button></a>
        </form>
    </main>
@stop