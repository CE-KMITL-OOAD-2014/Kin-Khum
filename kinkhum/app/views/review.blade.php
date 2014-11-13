<h2>Review Restaurant</h2>

<form action = "{{ url('/review') }}"  method="get">


<label for="Detail_restaurant">Detail</label><br>
<textarea  name="Detail"
		   placeholder="กรอกรายละเอียดของร้านอาหาร เช่น เมนูยอดนิยม ประเภทของร้านอาหาร บรรยากาศภายในร้าน"



		></textarea><br>
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
	      <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="4"> 4
</labl class="radio-inline">
	      <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="5"> 5
</label>
<labeel><br>





<br><input type="submit" value="create"<br>
</form>
