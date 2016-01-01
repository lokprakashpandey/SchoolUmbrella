@extends('admin.index')
@section('content')
	{!!Form::open(array('url'=>'myAdmin/streams/add','method'=>'post'))!!}
		<fieldset>
		    <div>
		    <label>Stream Name:</label>
		        <input placeholder="Name" name="name" type="text" autofocus>
		    </div>
		    
		    <button>Add Stream</button> 
		    <!-- Button checks Form first, then url, then method, if there is no url n method
		     then Form is sent to same url with get method -->
		</fieldset>
	{!!Form::close()!!}
@endsection