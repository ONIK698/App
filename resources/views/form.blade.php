
<!doctype html>
<hmtl lang="ru">
<head>
<meta charset="UTF-8">
<meta name="viewport"
content=width=device-width, user-scalable-no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0>
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>document</title>
<body>
<h1>Send mail<h1>
<br>  <p>Ваше Имя</p>
{!! Form::open(['url' => 'account']) !!}
  <p>Ваше Имя</p>
 {{Form::text('name')}}
 	<p>Ваш Email</p>
    {{Form::text('email')}}
    <p>Ваше сообщение разработчику</p>
    <br>
    {{Form::textarea('msg')}}
    <br>
    {{Form::submit('send')}}
{!! Form::close() !!}
</body>
</html> 
