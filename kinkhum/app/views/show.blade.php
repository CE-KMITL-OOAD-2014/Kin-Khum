
@extends('layout')
@section('body')

<html>
<head>
	<title>Show</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<body>

	<div class="container">

	<div class="page-header">
		<h1>Restaurant</h1>
	</div>
	

		<div container >
			
				<img src="a.png"  class="img-thumbnail" >

			<hr>
	
								<p > <FONT COLOR=#0000FF>{{$show->getRestaurant()}} &nbsp; {{$show->getType()}}<br></FONT>
				
				
								</p>
				
			<hr>
							 
		<h1>Review<small>Reataurant</small>></h1>
			

		</div>


	</div>
</div>
</body>

</html>

@stop
