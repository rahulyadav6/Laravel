<form action="/posts" method="POST">
    @csrf
    <input type="text" name="title" placeholder="Enter Post title"><br>
    <input type="text" name="body" placeholder="Enter Post description"><br>
    <input type="submit" value="Add">
</form>
