@foreach ($products as $p)
<h1>Product #{{$p->id}}</h1>
    <h5>{{$p->name}}</h5>
    <a href="/prods/{{$p->id}}">Get Details</a> <br>
    <a href="/prods/{{$p->id}}/edit">Edit</a> <br>

    <form action="/prods/{{$p->id}}" method="POST">
    @csrf
    @method('DELETE')
    <input type="submit" name="submit" value="Delete">
    </form>
@endforeach