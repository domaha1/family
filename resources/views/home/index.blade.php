@extends('home.layout')

@section('content')
<div class="imge">
    <h1>welcome</h1>
   @foreach ($data as $items )
        <h3>{{ $items }}</h3>
   @endforeach
<img src="../images/background2.png"/>
</div>

@endsection

