@extends('admin.index')
@section('content')
	{!!Form::open(array('url'=>"myAdmin/streams/edit/{$stream->id}",'method'=>'post'))!!}
	<fieldset>
		<div>
			<label>Name</label>
			<input placeholder="Name" name="name" type="text" value="{{$stream->name}}" autofocus>
		</div>
		
		<button>Update</button>
	</fieldset>
	{!!Form::close()!!}
@endsection