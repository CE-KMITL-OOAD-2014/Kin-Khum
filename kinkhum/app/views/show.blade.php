
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
			<h1>Restaurant {{$show->getRestaurant()}}</h1>
		</div>


		<div container >
			
			<img src="...." na class="img-thumbnail" >

			<hr>

			<p>ประเภทของร้านอาหาร :: {{$show->getType()}}<br>
				ที่อยู่ :: {{$show->getAddress()}}<br>
				เบอร์ติดต่อ :: {{$show->getTelephone()}}<br>
				
			</p>

			<hr>
			<form action="/show/{{$show->getId()}}/reviewsRes1" method="get">

				<input type="submit" value="Review">
			</form>

		</div>

		<h4>Review</h4>
		<hr>
		
		@for($i=0; $i<count($showReview); $i++)
			<div class="panel panel-default">
				<div class="panel-heading"><h4>Review</h4></div>
					<div class="panel-body">
				{{$showReview[$i]->getReview()}}<br>
	             {{$showReview[$i]->getReviewImg()}}<br>
	             
			</div>
		</div>
		@endfor

	</div>





</body>

</html>

@stop
