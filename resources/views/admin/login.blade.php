@extends('admin.index')
@section('content')
	<div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                        {!!Form::open(array('url'=>'admin/login','method'=>'post','class'=>'center'))!!} 
                        <!-- Post method is used for password for security reason -->
                        <!-- <form role="form"> -->
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Username" name="username" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <button class="btn btn-success btn-large btn-block">Login</button> 
                                <!-- Button checks Form first, then url, then method, if there is no url n method
                                 then Form is sent to same url with get method -->
                            </fieldset>
                        {!!Form::close()!!}    
                       <!--  </form> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection