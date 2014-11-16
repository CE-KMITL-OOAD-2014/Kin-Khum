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
			
			<img src="/image/{{$show->getImage()}}"  class="img-thumbnail" >

			<hr>

			<p>ประเภทของร้านอาหาร :: {{$show->getType()}}<br>
				ที่อยู่ :: {{$show->getAddress()}}<br>
				เบอร์ติดต่อ :: {{$show->getTelephone()}}<br>
				ราละเอียด :: {{$show->getDetail()}}<br>
				
			</p>

			<hr>
			 <form action = "/show/{{$show->getId()}}/reviewsRes1"  method="post" enctype="multipart/form-data">
     <div class="form-group">


      <label for="Create_reataurant">Detail</label><br>
      <textarea class="form-control" rows="3" placeholder="detail " name="review"></textarea>

      <br>
      <label class="radio-inline">
        <input type="radio" name="voteRes" id="inlineRadio1" value="1"> 1
      </label>
      <label class="radio-inline">
        <input type="radio" name="voteRes" id="inlineRadio2" value="2"> 2
      </label>
      <label class="radio-inline">
        <input type="radio" name="voteRes" id="inlineRadio3" value="3"> 3
      </label>

      <label class="radio-inline">
        <input type="radio" name="voteRes" id="inlineRadio1" value="4"> 4
      </label>
      

      <label class="radio-inline">
        <input type="radio" name="voteRes" id="inlineRadio1" value="5"> 5
      </label>
      <br>

      <input type="file" required name="restaurantImg" />

      <br><input type="submit" value="submit"><br>
        </div>
    </form>

		</div>

		<h4>Review</h4>
		<hr>
		
		@for($i=0; $i<count($showReview); $i++)
			<div class="panel panel-default">
				<div class="panel-heading"><h4>Review</h4></div>
					<div class="panel-body">
				{{$showReview[$i]->getReview()}}<br>
	             <img src="/image/{{$showReview[$i]->getReviewImg()}}"><br>
	             
			</div>
		</div>
		@endfor

	</div>





</body>

</html>

@stop
