@extends('index')
@section('content')

	@if(session('sucess_message'))
        {{session('sucess_message')}}
    @endif

    @if(session('error_message'))
        {{session('error_message')}}
    @endif

	  <section class="title">
	    <div class="container">
	      <div class="row-fluid">
	        <div class="span6">
	          <h1>Teacher</h1>
	        </div>
	        <div class="span6">
	          <ul class="breadcrumb pull-right">
	            <li><a href="index.html">Home</a> <span class="divider">/</span></li>
	            <li><a href="#">Pages</a> <span class="divider">/</span></li>
	            <li class="active">Teacher</li>
	          </ul>
	        </div>
	      </div>
	    </div>
	  </section>
	  <!-- / .title -->       


	  <section id="registration-page" class="container">
	    <span data-toggle="modal" data-target="#addNoteModal">Add Resource</span>
	  </section>
	  <!-- /#registration-page -->
	  <!-- Modal -->
	   <div id="addNoteModal" class="modal fade" role="dialog">
	      <div class="modal-dialog">

	        <!-- Modal content-->
	        <div class="modal-content">
	          <div class="modal-header">
	            <button type="button" class="close" data-dismiss="modal">&times;</button>
	            <h4 class="modal-title">Add Resource</h4>
	          </div>
	          <div class="modal-body">
	          	{!!Form::open(array('url' => 'teacher/resourceAdd','method' => 'post'))!!}
	          	
	          	<div class="controls">
	          	<label>Resource Type</label>
	          	  <select  name="resource_typeId" class="input-xlarge"> 
	          	  	<option>Select Type</option>
	          	  	@foreach($resourceTypes as $resourceType)
	          	  		<option value="{{$resourceType->id}}">{{$resourceType->name}}</option>
	          	  	@endforeach
	          	  </select> 
	          	</div>
	          	<div class="controls">
	          	<label>Description</label>
	          	  <textarea name="description" placeholder="Description"></textarea> 
	          	</div>
	          	<div class="controls">
	          	<label>Targeted Courses</label>
	          		<?php 
	          			$affiliate = null;
	          			$stream = null;
	          			$level = null;
	          		?>
	          	  @foreach($courses as $course)
	          	  	<?php
	          	  		if($affiliate  != $course->affiliate['name']){
	          	  			echo $course->affiliate['name']."<br>";
	          	  		}
	          	  		if($affiliate  != $course->affiliate['name'] || $stream != $course->stream['name']){
	          	  			echo $course->stream['name']."<br>";
	          	  		}
	          	  		if($affiliate  != $course->affiliate['name'] || $stream != $course->stream['name'] || $level != $course->level['name']){
	          	  			echo $course->level['name'];
	          	  		}
	          	  		echo "<br> &nbsp".$course->name;
	          	  		$affiliate = $course->affiliate['name'];
	          	  		$stream = $course->stream['name'];
	          	  		$level = $course->level['name'];
	          	  		?>
	          	  		<div class="checkbox">
	          	  		<?php
	          	  		if($course->courseType == 's'){
	          	  			for($i = 0; $i < $course->duration; $i++){
	          	  				?>
	          	  				
	          	  				  <label>
	          	  				  <input name="semesters[{{$course->id}}][]" type="radio" value="{{$i+1}}">{{$i+1}} Semester</label>

	          	  				<?php
	          	  			}
	          	  		}
	          	  		else{
	          	  			for($i = 0; $i < $course->duration; $i++){
	          	  				?>
	          	  				  <label>
	          	  				  <input name="semesters[]" type="radio" value="{{$i+1}}">{{$i+1}} Year</label>

	          	  				<?php
	          	  			}
	          	  		}
	          	  	 ?>
	          	  	</div>
	          	  @endforeach 
	          	</div>
	          	<button>Add</button> 
	          	{!!Form::close()!!}
	          </div>
	          <div class="modal-footer">
	            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	          </div>
	        </div>

	      </div>
	    </div>
@endsection