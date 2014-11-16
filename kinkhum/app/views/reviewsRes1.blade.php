@extends('layout')
@section('body')



<div class="container">

  <div class="page-header">
    <h1>Review <small>Restaurant</small></h1>
  </div>
  <form action = "/show/{{$id}}/reviewsRes1"  method="post" enctype="multipart/form-data">
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

      <input type="file" name="restaurantImg" />

      <br><input type="submit" value="submit"><br>
        </div>
    </form>
</div>
@stop
