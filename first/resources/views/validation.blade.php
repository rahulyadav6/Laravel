<form method="POST">
    @csrf
    Name:<input type="text" name="name" value="{{old('name')}}"><br>
    @error('name')
        {{$message}}
    @enderror
    Email:<input type="text" name="email" value="{{old('email')}}"><br>
    @error('email')
        {{$message}}
    @enderror
    Password:<input type="password" name="password" value="old('password')"><br>
    @error('password')
        {{$message}}
    @enderror
    <input type="text" value="submit">
</form>