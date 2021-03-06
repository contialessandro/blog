@extends('layout')
@section('content')

    <!-- -->
    <div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
            <br><br><br><br>
            <h1>{{$card->title}}</h1>
            <ul class="list-group">
				@foreach ($card->notes as $note)
					<li class="list-group-item">{{ $note->body }}
                        <a href="/notes/{{$note->id}}/edit" class="pull-right">Edit</a>
                        <br>Creaeted by <a href="" class="pull-left"></a>
                    </li>
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