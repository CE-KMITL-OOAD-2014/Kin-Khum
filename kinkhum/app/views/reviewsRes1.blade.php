@extends('layout')
@section('body')



<div class="container">

  <div class="page-header">
    <h1>Review <small>Restaurant</small></h1>
  </div>
  <form action = "{{ url('res/review') }}"  method="post" enctype="multipart/form-data">

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

<input type="file" name="restaurantImg" />

<br><input type="submit" value="create"<br>
</form>

</div>



@stop
