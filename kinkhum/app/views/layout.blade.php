<!DOCTYPE html>
<html lang="th">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KinKhum</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap-theme.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
     
    <nav class="navbar navbar-inverse" role="navigation">
        <div class="container-fluid banner-padding">
          <div class="navbar-header">
             <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
             </button>
             <a class="navbar-brand" href="/">KIN KHUM</a>
                     </div>
             

            <ul class="nav navbar-nav">
                <li><a href="/showAll"  >Restaurant Recommend</a></li>
                
                <li><a href="/bestRes">Best of Restaurant</a></li>
            
                    </ul>
  
      
      <form action="/search" class="navbar-form navbar-left" role="search" method="post">
        <div class="form-group">
          <input type="text" name="restaurant" class="form-control" placeholder="Search">
        </div>
        <button type="submit"  class="btn btn-default" >
        <span class="glyphicon glyphicon-cutlery"></span></button>

      </form>



          <nav class="navbar-right">  
            
            <a href="register" class="btn btn-info navbar-btn btn-sm" type="button">
            <span class="glyphicon glyphicon-pencil"></span>Sign Up</a>

              
          <a href="/login"> <button class="btn btn-info navbar-btn btn-sm" data-toggle="modal" data-target=".bs-example-modal-sm"><span class="glyphicon glyphicon-user"></span>Sign in</button></a>

          </nav>
        </div>

    </div>

    </div>
    </nav>
            
            @yield('body')
            
            <script type="/text/javascript" src="js/jquery.min.js"></script>
            <script type="/text/javascript" src="js/bootstrap.min.js"></script>
          </body>
        </html>