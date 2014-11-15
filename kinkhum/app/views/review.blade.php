<h2>Review Restaurant</h2>

<form action = "{{ url('/review') }}"  method="POST">


<label for="Detail_restaurant">Detail</label><br>
<textarea  name="review"
		   placeholder="กรอกรายละเอียดของร้านอาหาร เช่น เมนูยอดนิยม ประเภทของร้านอาหาร บรรยากาศภายในร้าน"



		></textarea><br>
<br>
<label class="radio-inline">
		  <input type="radio" name="voteRes"  value="1"> 1
</label>
<label class="radio-inline">
	  	  <input type="radio" name="voteRes"  value="2"> 2
</label>
<label class="radio-inline">
	      <input type="radio" name="voteRes"  value="3"> 3
</label>
<label class="radio-inline">
	      <input type="radio" name="voteRes"  value="4"> 4
</labl class="radio-inline">
	      <input type="radio" name="voteRes"  value="5"> 5
</label>
<labeel><br>





<br><input type="submit" value="create"<br>
</form>
