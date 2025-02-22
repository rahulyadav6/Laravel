@include('common.header')
<h1>About {{$name}}</h1>
@includeIf('common.inner',['page'=>"This is about page"])