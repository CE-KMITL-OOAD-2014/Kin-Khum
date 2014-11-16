@extends('layout')
@section('body')	
		<div class="container">
		<div class="row">
			<div class="col-md-12"> 
			<div class="col-md-6 ">
				<h2 class="page-header">Restaurant Recommend</h2></div>
				<a href="/createRes1"> <button type="button"  style="margin-top:40px;" class="btn btn-success pull-right">Create Restaurant</button></a>


	      
			</div>	
			</div>

			@for($i=0; $i<count($showRes); $i++)
						<div class="col-xs-6 col-md-4" style="margin-left: 52;">

	    			<div class="panel panel-default" style="margin-left: -60;">
	          	 <div class="panel-heading"><a href="show/{{$showRes[$i]->getId()}}" class="pull-right">View all</a> <h4>{{$showRes[$i]->getRestaurant()}}</h4></div>
	   					<div class="panel-body">
	            
	             				 <div class="clearfix"></div>
	             					 <img src="/image/{{$showRes[$i]->getImage()}}" class="img-responsive img-thumbnail pull-right">
	             				 <p style="margin-right: 140;">{{$showRes[$i]->getType()}}<br>
	             				 								{{$showRes[$i]->getAddress()}}<br>
	             				 							{{$showRes[$i]->getTelephone()}}<br>

	      						</p>
	                   			 </div>
	       				</div>

					</div>
			@endfor
			
				
		</div>
	@stop