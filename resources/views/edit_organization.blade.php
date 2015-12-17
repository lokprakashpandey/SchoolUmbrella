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
	            <li><a href="index.html">Home</a> <span class="divider">/</span></li>
	            <li><a href="#">Pages</a> <span class="divider">/</span></li>
	            <li><a href="#">Organization</a> <span class="divider">/</span></li>
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
	    <!-- <form class="center" action='' method="POST"> -->
	    {!!Form::open(array('url'=>'organization/edit','method'=>'post','class'=>'center', 'enctype'=>'multipart/form-data'))!!}
	      <fieldset class="registration-form">
	      	
	      	<div class="control-group">
	          <!-- Firstname -->
	          <div class="controls">
	            <input type="text"  name="name" placeholder="Name" class="input-xlarge">
	          </div>
	        </div>

	        <div class="control-group">
	          <!-- Middlename -->
	          <div class="controls">
	            <input type="text"  name="address" placeholder="Address" class="input-xlarge">
	          </div>
	        </div>

	        <div class="control-group">
	          <!-- Lastname -->
	          <div class="controls">
	            <textarea  rows="10" cols="20" name="description" placeholder="Description" class="input-xlarge">
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

@endsection