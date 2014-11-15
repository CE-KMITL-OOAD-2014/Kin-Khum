
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


			</div>


		</div>
		<form action="/reviewsRes1" method="get">

			 <input type="submit" value="Review">
			 </form>
	</div>




</body>

</html>

@stop
