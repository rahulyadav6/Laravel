@extends('layout')
@section('title')
    Product page
@endsection
@section('content')
    {{-- <div>
        <h1>Products</h1>
        <h2>Type: {{ $products['type'] }}</h2>
        <h2>Type: {{ $products['name'] }}</h2>
        <h2>Type: {{ $products['brand'] }}</h2>
    </div> --}}
    <div>
        <h1>Products</h1>
        @foreach ($products as $product)
            <h2 class=" bg-slate-300 ">Name: {{$product['name']}}</h2>
            <h4>Type: {{$product['type']}}</h4>
            <p>Brand: {{$product['brand']}}</p>
            <img src="{{$product['image'] }}" height="200px" />
        @endforeach
    </div>
@endsection
