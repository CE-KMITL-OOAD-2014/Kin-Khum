<h2>Search Restaurant</h2>


<!--<form action="form.php" method="post"> -->
<form action = "{{ url('/search') }}"  method="get">

Search: <input type="text" name="term" /><br /> <br>

<input type="submit" value="Submit" /> 
</form>