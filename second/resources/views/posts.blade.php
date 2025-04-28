<table border="2">
    @foreach ($posts as $post)
        <tr>
            <td>{{$post->title}}</td>
            {{-- <td>{{$post->body}}</td> --}}
            <td>
                <a href="/posts/{{$post->id}}">View</a>
                <a href="/posts/{{$post->id}}/edit">Edit</a>
                <form action="/posts/{{$post->id}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" name="submit" value="Delete">
            </td>
        </tr>
    @endforeach
</table>