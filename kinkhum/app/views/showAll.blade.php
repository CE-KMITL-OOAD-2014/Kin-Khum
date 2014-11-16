@extends('layout')
@section('body')

	<html>
			
		<head>
			<title>Index</title>
				<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
				<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
				<script type="text/javascript" src="js/jquery.min.js"></script>
				<script type="text/javascript" src="js/bootstrap.min.js"></script>

	  	
	    </head>
		<body>	


		<div class="container">
		<div class="row">
			<div class="col-md-12"> 
			<div class="col-md-6 ">
				<h2 class="page-header">Restaurant Recommend</h2></div>
				<button  href="createRes1" type="button"  style="margin-top:40px;" class="btn btn-success pull-right">Success</button>	


	      
			</div>	
			</div>

			@for($i=0; $i<count($showRes); $i++)
						<div class="col-xs-6 col-md-4" style="margin-left: 52;">

	    			<div class="panel panel-default" style="margin-left: -60;">
	          	 <div class="panel-heading"><a href="show/{id}" class="pull-right">View all</a> <h4>{{$showRes[$i]->getRestaurant()}}</h4></div>
	   					<div class="panel-body">
	            
	             				 <div class="clearfix"></div>
	             					 <img src="/image/m6_01.png" class="img-responsive img-thumbnail pull-right">
	             				 <p style="margin-right: 140;">{{$showRes[$i]->getType()}}<br>
	             				 								{{$showRes[$i]->getAddress()}}<br>
	             				 							{{$showRes[$i]->getTelephone()}}<br>

	      						</p>
	                   			 </div>
	       				</div>

					</div>
			@endfor
			
				
		</div>


	</body>
	</html>
	@stop