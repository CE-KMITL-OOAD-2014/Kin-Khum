@extends('layout')
@section('body')
<div class="container ">
  <div class="col-md-9 carouse-center">
    <div class="row carousel-holder">
      <div class="col-md-12" style="margin-top: 10;
        margin-left: 150;
        margin-bottom: 40;">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" >
          <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="item active">
              <img class="slide-image" src="86.png" alt="">
            </div>
            <div class="item">
              <img class="slide-image" src="http://placehold.it/800x300" alt="">
            </div>
            <div class="item">
              <img class="slide-image" src="http://placehold.it/800x300" alt="">
            </div>
          </div>
          <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
          </a>
          <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
          </a>
        </div>
      </div>
    </div>
  </div>
</nav>
<div class="row picture">
  <div class="col-xs-6 col-sm-4"><img src="Grilled-Chicken-Salad.png" class="img-thumbnail" data-toggle="modal" data-target="#myModal">
    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <h4 class="modal-title" id="myModalLabel">Modal title</h4>
          </div>
          <div class="modal-body">
            ....
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xs-6 col-sm-4"><img src="Grilled-Chicken-Salad.png" class="img-thumbnail" data-toggle="modal" data-target="#myModal">
    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <h4 class="modal-title" id="myModalLabel">Modal title</h4>
          </div>
          <div class="modal-body">
            ....
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xs-6 col-sm-4"><img src="Grilled-Chicken-Salad.png" class="img-thumbnail" data-toggle="modal" data-target="#myModal">
    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <h4 class="modal-title" id="myModalLabel">Modal title</h4>
          </div>
          <div class="modal-body">
            ....
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="col-lg-12">
  <h2 class="page-header">Best Restaurant</h2>
</div>
<div style ="background-color:#FFFFFF">
  <div class="row margin-middle">
    
    <div class="col-lg-4 col-sm-6 " style="padding-left: 100;">
      <img class="img-circle " src="Sa-Mun-Pai-4_0.png" alt="">
      <h3>John Smith1
      <small>Job Title</small>
      </h3>
      <p>What does this team member to? !</p>
    </div>
    <div class="col-lg-4 col-sm-6 " style="padding-left: 100;">
      <img class="img-circle " src="Sinka (2).png" alt="">
      <h3>John Smith2
      <small>Job Title</small>
      </h3>
      <p>What does this team member to? Keep it short! This is also a great spot for social links!</p>
    </div>
    <div class="col-lg-4 col-sm-6" style="padding-left: 100;">
      <img class="img-circle " src="Tohkai.png" alt="">
      <h3>John Smith3
      <small>Job Title</small>
      </h3>
      <p>What does this team member to? Keep it short! This is also a great spot for social links!</p>
    </div>
  </div>
  <div class="row margin-middle">
    <div class="col-lg-12">
    </div>
    <div class="col-lg-4 col-sm-6" style="padding-left: 100;">
      <img class="img-circle " src="http://placehold.it/200x200" alt="">
      <h3>John Smith1
      <small>Job Title</small>
      </h3>
      <p>What does this team member to? !</p>
    </div>
    <div class="col-lg-4 col-sm-6" style="padding-left: 100;">
      <img class="img-circle " src="http://placehold.it/200x200" alt="">
      <h3>John Smith2
      <small>Job Title</small>
      </h3>
      <p>What does this team member to? Keep it short! This is also a great spot for social links!</p>
    </div>
    <div class="col-lg-4 col-sm-6" style="padding-left: 100;">
      <img class="img-circle " src="http://placehold.it/200x200" alt="">
      <h3>John Smith3
      <small>Job Title</small>
      </h3>
      <p>What does this team member to? Keep it short! This is also a great spot for social links!</p>
    </div>
  </div>
</div>
<div class="col-xs-4" style="margin-top: 30;">
  <div class="well">
    <form class="form-horizontal" role="form">
      <h4>What's New</h4>
      <div class="form-group" style="padding:14px;">
        <textarea class="form-control" placeholder="Update your status"></textarea>
      </div>
      <p>
      <div class="form-group">
        <a href="#" class="btn btn-xs btn-primary"><span class="glyphicon glyphicon-heart"></span> Favorite</a>&nbsp;
        
        <!--<button class="btn btn-success" type="button ">Post</button>-->
        <input class="btn btn-success btn-sm pull-right" type="submit" value="Post">&nbsp;
        </p>
      </div>
      
    </form>
  </div>
</div>
<div class="col-xs-4" style="margin-top: 30;">
  <div class="well">
    <form class="form-horizontal" role="form">
      <h4>What's New</h4>
      <div class="form-group" style="padding:14px;">
        <textarea class="form-control" placeholder="Update your status"></textarea>
      </div>
      <p>
      <div class="form-group">
        <a href="#" class="btn btn-xs btn-primary"><span class="glyphicon glyphicon-heart"></span> Favorite</a>&nbsp;
        
        <!--<button class="btn btn-success" type="button ">Post</button>-->
        <input class="btn btn-success btn-sm pull-right" type="submit" value="Post">&nbsp;
        </p>
      </div>
      
    </form>
  </div>
  @stop