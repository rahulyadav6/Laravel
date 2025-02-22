<div>
    @if($marks >= 90 && $marks <= 100)
        <p> Grade O</p>
    @elseif($marks >= 60 && $marks < 90)
        <p>Grade A</p>
    @elseif($marks >= 40 && $marks < 60)
        <p>Grade B</p>
    @else 
        <p>Fail</p>
    @endif
</div>
