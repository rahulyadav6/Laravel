<form action="/prods/{{$product->id}}" method="POST">
    @csrf
    {{method_field('PATCH')}}
    <input type="text" name="name" placeholder="Enter Name" value="{{$product->name}}"><br>
    <input type="text" name="description" placeholder="Enter the description" value="{{$product->description}}"><br>
    <input type="text" name="price" placeholder="Enter Price" value="{{$product->price}}"><br>
    <input type="submit" value="Update">
</form>