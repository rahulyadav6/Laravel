<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User List</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="m-10">
    <h1 class="text-4xl">User Status List</h1>
    {{-- <ul> --}}
        @foreach ($users as $user)
            <li class="text-3xl italic">{{$user['name']}} - 
            @if($user['status'] == 'Active')
            <span class=" text-green-600">{{$user['status']}}</span>
            @elseif($user['status'] == 'inactive')
            <span class=" text-red-600">{{$user['status']}}</span>
            @endif
             -{{$user['role']}}</li>
        @endforeach
    {{-- </ul> --}}
</div>
</body>
</html>
