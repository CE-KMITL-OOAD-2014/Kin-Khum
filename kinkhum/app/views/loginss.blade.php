@extends('layout')
@section('body')



 <div class="page-header">
  <h2>LOGIN</h2>
  </div>

<div class="comtainer">
<form  method="post" action="/login">

<input type="text" name="username" placeholder="Username">
<input type="password" name="password" placeholder="Password">
<input type="submit" value="login"<br>
</form>
</div>

@stop