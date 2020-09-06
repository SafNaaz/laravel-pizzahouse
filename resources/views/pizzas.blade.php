@extends('layouts.layout')

@section('content')
<div class="flex-center position-ref full-height">

    <div class="content">
        <div class="title m-b-md">
            Pizzas
        </div>
        <p>{{ $type}} - {{ $base }} - {{$price}}</p>
        @if($price > 15)
            <p>this pizza is expensive</p>
        @elseif($price < 5)
            <p>this pizza is cheap</p>
        @else
            <p>this pizza is normally prized</p>
        @endif
    </div>
</div>
@endsection

