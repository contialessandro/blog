@extends('layout')

@section('content')
    <div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
            <h1>{{$card->title}}</h1>
            <ul class="list-group">
				@foreach ($card->notes as $note)
					<li class="list-group-item">{{ $note->body }}</li>
				@endforeach
			</ul>
                Add new note
            <form method="POST" action="/cards/{{$card->id}}/notes">
            {{ csrf_field() }}
                <div class="form-group">
                <textarea name="body" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
    </div>
@stop