@extends('admin.index')
@section('content')
	{!!Form::open(array('url'=>"myAdmin/resourceTypes/edit/{$resourceType->id}",'method'=>'post'))!!} 
	<fieldset>
	        <div>
	            Resource Type:<input placeholder="Name" name="rname" type="text" value="{{$resourceType->name}}" autofocus>
	        </div>
	        
	        <!-- Change this to a button or input when using this as a form -->
	        <button>Update</button> 
	        <!-- Button checks Form first, then url, then method, if there is no url n method
	         then Form is sent to same url with get method -->
	</fieldset>
	{!!Form::close()!!}
@endsection