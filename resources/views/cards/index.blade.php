@extends('layout')

@section('content')
<h1>all cards</h1>
	<div>

		<ul>
@foreach ($cards as $card)

			<li>{{$card->title}}</li>
		
@endforeach
		</ul>

</div>
@stop