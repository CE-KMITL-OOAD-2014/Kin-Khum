@extends('layout')
@section('body')
	

		<div class="container">
			<div class="col-md-12"> 
				<h2 class="page-header">Best Restaurant</h2>
	      
			</div>	

			@for($i=0; $i<count($showRes); $i++)
						<div class="col-xs-6 col-md-4" style="margin-left: 52;">

	    			<div class="panel panel-default" style="margin-left: -60;">
	          	 <div class="panel-heading"><a href="{{ url('showAll') }}" class="pull-right">View all</a> <h4>{{$showRes[$i]->getRestaurant()}} &nbsp;&nbsp; <span class="glyphicon glyphicon-heart" aria-hidden="true"></span>&nbsp;{{$showRes[$i]->getVote()}}</h4></div>
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