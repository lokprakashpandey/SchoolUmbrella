@extends('admin.index')
@section('content')
	{!!Form::open(array('url'=>"myAdmin/affiliates/edit/{$affiliate->id}",'method'=>'post'))!!}
	<fieldset>
	        <div>
	        <label>Name:</label>
	            <input placeholder="Name" name="name" type="text" value="{{$affiliate->name}}" autofocus>
	        </div>
	        
	        <div>
	        <label>Description:</label>
	            <textarea name="description">{{$affiliate->description}}</textarea>  
	        </div>
	        
	        <div>
	           <label>Country</label>
	            <select name="countryId" class="input-xlarge"> 
	            	<option>Select Country</option>
	            	@foreach($countries as $counrty)
	            	 	<option value="{{$counrty->id}}" <?php if($counrty->id == $affiliate->countryId){ echo 'selected'; } ?> >{{$counrty->name}}</option>
	            	@endforeach
	            </select>
	        </div>
	        
	        <!-- Change this to a button or input when using this as a form -->
	        <button>Update</button> 
	        <!-- Button checks Form first, then url, then method, if there is no url n method
	         then Form is sent to same url with get method -->
	    </fieldset>
	{!!Form::close()!!}
@endsection