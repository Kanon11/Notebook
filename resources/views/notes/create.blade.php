@extends('layouts.base')

@section('content')
<div class="container text-center">

	<h1>
		Create Note
	</h1>	

	@if(count($errors)>0)
		<ul>
 			@foreach($errors->all() as $error)
 			<li class="alert alert-danger">{{$error}}</li>
 			@endforeach
		</ul>
	@endif




    <form action="{{route('notes.store')}}" method="POST">
        {{csrf_field()}}
        <div class="form-group">
            <label for="title">
                Note Title
            </label>
            <input class="form-control" name="title" placeholder="Note Title" type="text">
            
        </div>

        <div class="form-group">
            <label for="body">
                Notes
            </label>
            <input class="form-control" name="body" placeholder="Notes" type="textarea" rows="3">
        </div>
        <input type="hidden" name="notebook_id" value="{{$id}}">
        <input type="submit" class="btn btn-primary" value="Done">
    </form>
</div>
@endsection
