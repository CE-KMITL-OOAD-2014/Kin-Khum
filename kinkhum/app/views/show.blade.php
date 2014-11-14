
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
	<form action = "{{ url('res/show') }}"  method="post" enctype="multipart/form-data">

		<div container >
			
				<img src="a.png" class="img-thumbnail" >

			<hr>
			
		@if(isset($show))
					@foreach($show as $restaurant)		
				<p > <FONT COLOR=#0000FF>{{$restaurant->type}}<br>
	             				 		{{$restaurant->address}}<br>
	             				 		{{$restaurant->telephone}}<br></FONT>

					
				</p>
	@endforeach
				@endif

			

		</div>


	</div>
</div>
</body>

</html>

@stop
