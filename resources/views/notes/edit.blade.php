@extends('layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <h1>Edit the note</h1>

            Edit
            <form method="POST" action="/notes/{{$note->id}}">
                {{ csrf_field() }}
                {{method_field('PATCH')}}
                <div class="form-group">
                    <textarea name="body" class="form-control">{{$note->body}}</textarea>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
@stop