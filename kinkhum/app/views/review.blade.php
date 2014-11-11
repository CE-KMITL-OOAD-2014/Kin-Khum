<h2>Review Restaurant</h2>

<form action = "{{ url('/review') }}"  method="get">


<label for="Create_reataurant">type restaurant</label><br>
<input type="text" name="type" placeholder="ประเภทของอาหาร"><br>


<label for="Detail_restaurant">Detail</label><br>
<textarea  name="Detail"
		   placeholder="รายละเอียดต่างๆของร้านอาหาร"



		></textarea><br>

<br><input type="submit" value="create"<br>
</form>
