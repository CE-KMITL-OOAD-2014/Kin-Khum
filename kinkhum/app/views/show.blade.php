
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
			
			<img src="...." na class="img-thumbnail" >

			<hr>

			<p > <FONT COLOR=#0000FF>{{$show->getRestaurant()}} &nbsp; {{$show->getType()}} &nbsp; {{$show->getDetail()}}<br></FONT>
				
				
			</p>

			<hr>

			<h3>Review <small>Restaurant</small></h3>

			<!-- <form action = "{{ url('res/review') }}"  method="post" enctype="multipart/form-data"> -->

				<form role="form">
					<div class="form-group">


						<label for="Create_reataurant">Detail</label><br>
						<textarea class="form-control" rows="3" placeholder="detail"></textarea>

						<br>
						<label class="radio-inline">
							<input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="1"> 1
						</label>
						<label class="radio-inline">
							<input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="2"> 2
						</label>
						<label class="radio-inline">
							<input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="3"> 3
						</label>

						<label class="radio-inline">
							<input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="4"> 4
						</label>


						<label class="radio-inline">
							<input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="5"> 5
						</label>
						<br>
						<input type="submit" value="create"<br>

					</div>
				</form>


			</div>


		</div>
	</div>
</body>

</html>

@stop
