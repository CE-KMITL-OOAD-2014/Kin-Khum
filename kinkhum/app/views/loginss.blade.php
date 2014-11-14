@extends('layout')
@section('body')



<h2> LOGIN </h2>
<form  method="post" action="/login">

<input type="text" name="username" placeholder="Username">
<input type="password" name="password" placeholder="Password">
<input type="submit" value="login"<br>
</form>

@stop