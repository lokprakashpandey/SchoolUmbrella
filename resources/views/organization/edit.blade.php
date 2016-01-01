@extends('index')
@section('content')
	  <section class="title">
	    <div class="container">
	      <div class="row-fluid">
	        <div class="span6">
	          <h1>Organization</h1>
	        </div>
	        <div class="span6">
	          <ul class="breadcrumb pull-right">
	            <li><a href="{{url('')}}">Home</a> <span class="divider">/</span></li>
	            <li><a href="{{url('organization')}}">Organization</a> <span class="divider">/</span></li>
	            <li class="active">Edit</li>
	          </ul>
	        </div>
	      </div>
	    </div>
	  </section>
	  <!-- / .title -->

	<section id="registration-page" class="container">

		@if(session('success_message'))
		  {{session('success_message')}}
		@endif

		<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Update Courses</button>
	    <!-- <form class="center" action='' method="POST"> -->
	    {!!Form::open(array('url'=>'organization/edit','method'=>'post','class'=>'center','enctype'=>'multipart/form-data'))!!}
	      <fieldset class="registration-form">
	      	
	      	<div class="control-group">
	          <!-- Firstname -->
	          <div class="controls">
	          @if($organization)
	          <input type="text"  value="{{ $organization->name}} " name="name" placeholder="Name" class="input-xlarge">
	          @else
	          <input type="text"  value="" name="name" placeholder="Name" class="input-xlarge">
	          @endif
	          </div>
	        </div>

	        <div class="control-group">
	          <!-- Middlename -->
	          <div class="controls">
	          	@if($organization)
	          <input type="text"  value="{{$organization->address}}" name="address" placeholder="Address" class="input-xlarge">
	          @else
	          <input type="text"  name="address" value="" placeholder="Address" class="input-xlarge">
	          @endif
	          </div>
	        </div>

	        <div class="control-group">
	          <!-- Lastname -->

	          <div class="controls">
	            <textarea  rows="10" cols="20" name="description" placeholder="Description" class="input-xlarge">
	            	@if($organization)
	            	{{$organization->description}}
	            	@endif
	          	</textarea>
	          </div>
	        </div>

	        <div class="control-group">
	          <!-- Username -->
	          <div class="controls">
	            <input type="file" name="brochure" class="input-xlarge">
	          </div>
	        </div>

   	        <div class="control-group">
	          <!-- Username -->
	          <div class="controls">
	            <input type="submit" name="Submit" value="Update" class="input-xlarge">
	          </div>
	        </div>

	      </fieldset>
	    <!-- </form> -->
	    {!!Form::close()!!}
	  </section>

	  <!-- Modal -->
	  <div id="myModal" class="modal fade" role="dialog">
	    <div class="modal-dialog">

	      <!-- Modal content-->
	      <div class="modal-content">
	        <div class="modal-header">
	          <button type="button" class="close" data-dismiss="modal">&times;</button>
	          <h4 class="modal-title">Update Courses</h4>
	        </div>
	        <div class="modal-body">
	        {!!Form::open(array('url'=>"organization/addCourses",'method' => 'post'))!!}
	          @foreach($courses as $course)
	          		<div class="checkbox">
	          		  <label>
	          		  <input name="courses[]" type="checkbox" value="{{$course->id}}">{{$course->name}}</label>
	          		</div>	
	          @endforeach
	          <button>UPDATE</button>
	         {!!Form::close()!!} 
	        </div>
	        <div class="modal-footer">
	          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        </div>
	      </div>

	    </div>
	  </div>

@endsection