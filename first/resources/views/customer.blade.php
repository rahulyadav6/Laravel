<div>
    <!-- Waste no more time arguing what a good man should be, be one. - Marcus Aurelius -->
    <h1>The customers are </h1>
    @@for ($i = 0; $i < count($customers); $i++)
        <p>{{$customers[$i]}}</p>
    @endfor

    @@foreach ($collection as $item)
        
    @endforeach

    <h1>Using Switch Case</h1>
    @switch(count($i))
        @case(1)
            <p>Monday</p>
            @break
        @case(2)
            <p>Tuesday</p>
            @break
            @case(3)
            <p>Wednesday</p>
            @break
            @case(4)
            <p>Thursday</p>
            @break
            @case(5)
            <p>Friday</p>
            @break
            @case(6)
            <p>Saturday</p>
            @break
            @case(7)
            <p>Sunday</p>
            @break
        @default
            <p>There are multiple customers</p>
    @endswitch
</div>
