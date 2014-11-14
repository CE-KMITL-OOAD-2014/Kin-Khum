<html>
 <head>
 	<title>Register</title>
			<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
			<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
			<script type="text/javascript" src="js/jquery.min.js"></script>
			<script type="text/javascript" src="js/bootstrap.min.js"></script>


 </head>

 	<body>

 		<div class="container">

 				<div class="page-header">
 				 	<h1>Register <small>Infomaion user</small></h1>
				</div>
			
			
				<center><img src="download.png" class="img-circle"></div></center><br></br>
				

 				

				<form action='/willRegister'class="form-horizontal" role="form"  method="POST"> 

					<div class="form-group">
   							<label class="control-label col-md-4 col-offset-4">Name</label>
   							<div class="col-xs-4">
   							<input for="InputName" name="name"  type="text" class="form-control" id="InputName" placeholder="Enter Name ">
   							</div>
 					</div>
 					
   					</div>

   					<div class="form-group">
   							<label class="control-label col-md-4 col-offset-4">Username</label>
   							<div class="col-xs-4">
   							<input  for="InputUsername" name="username" type="text" class="form-control" id="InputUsername" placeholder="Enter Username ">
   						</div>
   					</div>

  					<div class="form-group">
   							<label class="control-label col-md-4 col-offset-4">Email address</label>
   							<div class="col-xs-4">
   							<input for="exampleInputEmails1" name="email" type="text"  class="form-control" id="exampleInputEmail1" placeholder="Enter email">
   							</div>
 					</div>
  					<div class="form-group">
    						<label class="control-label col-md-4 col-offset-4">Password</label>

    						<div class="col-xs-4">
    						<input for="exampleInputPass1" name="password" type="password"  class="form-control" id="exampleInputPassword1" placeholder="Password">
    						</div>
  					</div>
  					
            <div class="form-group">
                <label class="control-label col-md-4 col-offset-4">Status</label>
  				      <div class="col-xs-4">

                  <select name="status" class="form-control" >
                   <option value="Admin" >Admin</option>
                   <option value="Owner Res" >Owner Res</option>
                   <option value="Member" >Member</option>
                   
              </select>
             

                 </div>
            </div>
  						
  		
   							 
   							 	<div class="col-xs-6">
                 
     								 <button type="submit" class="btn btn-default btn-submit " style="margin-left: 560;">Submit<span class=" glyphicon glyphicon-ok-circle"></span>
                    
   									</button>

  								</div>
                  </form>
  						</div>
   								
				
 			
 		</div>
 	</body>


</html>