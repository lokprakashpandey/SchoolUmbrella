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
              <!-- url le website_ko_name/public samma ko link dinchha -->
	            <li class="active">Organization</li>
	          </ul>
	        </div>
	      </div>
	    </div>
	  </section>
	  <!-- / .title -->       


	<section id="about-us" class="container main">
          <div class="row-fluid">
            <div class="span9">
                <!-- This div is used for empty space -->
            </div>
            <div class="span3">
                <a class="btn btn-success btn-large pull-right" href="{{url('organization/edit')}}">Edit Profile</a>
            </div>
          </div>

        <div class="row-fluid">
            <div class="span6">
                @if($organization)
                <h2>{{$organization->name}}</h2>
                <p>{{$organization->description}}</p>
                @else
                  <h3>Organization name is not added !!</h3>
                @endif
            </div>
            <div class="span6">
                <h2>Our Courses</h2>
                <div>
                    <div class="progress"><div class="bar" style="width: 80%; text-align:left; padding-left:10px;">BCA</div></div>
                    <!-- <div class="progress progress-warning"><div class="bar" style="width: 70%; text-align:left; padding-left:10px;">Joomla</div></div>
                    <div class="progress progress-info"><div class="bar" style="width: 60%; text-align:left; padding-left:10px;">Drupal</div></div>
                    <div class="progress progress-danger"><div class="bar" style="width: 90%; text-align:left; padding-left:10px;">Magento</div></div> -->
                </div>
            </div>
        </div>

        <hr>


        <div class="row-fluid">
            <div class="span6">
                <h3>Address</h3>
                @if($organization)
                <p>{{$organization->address}}</p>
                @endif
            </div>
            <div class="span6">
                <h3>Our Services</h3>
                <div class="accordion" id="accordion2">
                    <div class="accordion-group">
                      <div class="accordion-heading">
                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
                          Professional Web Design
                        </a>
                      </div>
                      <div id="collapseOne" class="accordion-body collapse">
                        <div class="accordion-inner">
                          Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua.
                        </div>
                      </div>
                    </div>
                    <div class="accordion-group">
                        <div class="accordion-heading">
                          <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
                            Premium Wordpress Themes
                          </a>
                        </div>
                      <div id="collapseTwo" class="accordion-body collapse">
                        <div class="accordion-inner">
                          Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                      </div>
                    </div>
                    <div class="accordion-group">
                        <div class="accordion-heading">
                          <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
                            PSD2XHTML Conversion
                          </a>
                        </div>
                      <div id="collapseThree" class="accordion-body collapse">
                        <div class="accordion-inner">
                          Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
</section>
@endsection