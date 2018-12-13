<h2>зДАРОВА, {{Auth::user()->email}}<h2>
<br>
@if(\Auth::user()->isAdmin == 1)
<a href="{(route ('admin'))}">В Админку</a><br>
@endif
<a href="{{route ('logout')}">Выйти</a>