@extends('admin.index')
@section('content')
 {!!Form::open(array('url'=>'myAdmin/resourceTypes/add','method'=>'post'))!!}
 	<fieldset>
	        <div>
	            Resource Type<input placeholder="Name" name="name" type="text" autofocus>
	        </div>
	        <button>Add</button> 
	        <!-- Button checks Form first, then url, then method, if there is no url n method
	         then Form is sent to same url with get method -->
	</fieldset>
 {!!Form::close()!!}
@endsection