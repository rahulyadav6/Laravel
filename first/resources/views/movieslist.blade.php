
<?php>

    <h2 style="margin: 30px">Movie List</h2>
    <ul>
        @foreach($movies as $movie)
            @php
                $color ='';
                if ($movie->category == 'Action'){
                    $color = 'red';
                }elseif ($movie->category == 'Sci-Fi'){
                    $color = 'blue';
                }elseif ($movie->category == 'Romance'){
                    $color = 'green';
                }
            @endphp

            <li style="color: {{ $color }};">
                {{ $movie->name }} - (Rating: {{ $movie->rating }}) 

                @if($movie->top_rated == "Top Rated")
                    <div style="background-color: yellow; padding: 5px; display: inline-block;">
                        {{$movie->top_rated}}
                    </div>
                @endif
                
                - <span>Category:{{$movie->category}}</span> 
            </li>
        @endforeach
    </ul>
