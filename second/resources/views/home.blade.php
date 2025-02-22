@include('common.header')
<h1>Hello from home page</h1>
<a href="/">Welcome page</a>
<a href="/about/rahul">About page</a>

@include('common.inner',['page'=>"This is home page"])