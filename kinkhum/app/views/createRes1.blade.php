@extends('layout')
@section('body')



<div class="container">

  <div class="page-header">
  <h1>Create <small>Restaurant</small></h1>
  </div>
       <form action = "{{ url('res/create') }}"  method="post" enctype="multipart/form-data">
        <form role="form">
           <div class="form-group">
                <input type="text" class="form-control" name="restaurant" placeholder="Resaurant"><br>
                <input type="text" class="form-control"  name="type" placeholder="Type"><br>
                <input type="text" class="form-control" name="address" placeholder="Address"><br>
                <input type="text" class="form-control" name="telephone" placeholder="Telephone"><br>
				<textarea class="form-control" name="detail" rows="3"></textarea><br>
      <input type="file" require name="restaurantImg" />
				<input type="submit" value="Submit">
            </div>
		
        </form>

  

		</div>
</div>

@stop