<h2>Create Restaurant</h2>

<form action = "{{ url('/createRes') }}"  method="post" enctype="multipart/form-data">

<label for="Create_reataurant">restaurant name</label><br>
<input type="text" name="restaurant" placeholder="Restaurant"><br>

<label for="Create_reataurant">type restaurant</label><br>
<input type="text" name="type" placeholder="ประเภทของอาหาร"><br>

<label for="Create_reataurant">address restaurant</label><br>
<input type="text" name="type" placeholder="ประเภทของอาหาร"><br>

<label for="Create_reataurant">telephone restaurant</label><br>
<input type="text" name="type" placeholder="ประเภทของอาหาร"><br>


<label for="Detail_restaurant">Detail</label><br>
<textarea  name="detail"
		   placeholder="รายละเอียดต่างๆของร้านอาหาร"></textarea><br>


			 <input type="file" name="restaurantImg" />

<br><input type="submit" value="create"<br>
</form>
