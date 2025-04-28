<form action="/prods" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Enter Name"><br>
    <input type="text" name="description" placeholder="Enter the description"><br>
    <input type="number" name="price" placeholder="Price"><br>
    <input type="submit" value="Add">
</form>