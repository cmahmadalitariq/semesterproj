<!DOCTYPE html>
<html lang="en">
<head>
  <title>myaccoount</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
  .navbar a::before,
.nav a::after {
  content: '';
  height: 14px;
  width: 14px;
  position: absolute;
  transition: all .35s ease;
  opacity: 0;
}

.navbar a::before {
  content: '';
  right: 0;
  top: 0;
  border-top: 3px solid #3E8914;
  border-right: 3px solid #2E640F;
  transform: translate(-100%, 50%);
}

.navbar a:after {
  content: '';
  left: 0;
  bottom: 0;
  border-bottom: 3px solid #2E640F;
  border-left: 3px solid #3E8914;
  transform: translate(100%, -50%)
}

.navbar a:hover:before,
.nav a:hover:after{
  transform: translate(0,0);
  opacity: 1;
}

.navbar a:hover {
  color: black;
}
 
  
   #navbar {
   
  position: fixed;
  top: -50px;
  width: 100%;
  display: block;
  transition: top 0.3s;
}

    /* Remove the navbar's default rounded borders and increase the bottom margin */ 
    .navbar {
      margin-bottom: 50px;
      border-radius: 0;
    }
	.gggrid-container1 {
  display: grid;
   grid-gap: 10px;
  border-color:white;
  grid-template-columns: auto auto auto auto ;
  grid-template-rows: auto auto  auto auto  ;
 
 
     height:100% ;
  width:100% ;
  position:relative;
 
}

.gggrid-container1 > div {
  background-color:white;
   
  text-align: center;
  font-size: 30px;
  width: 650px;
  height: 750px;
padding-left:80px;
}

.grid-container1 {
  display: grid;
   grid-gap: 10px;
  border-color:white;
  grid-template-columns: auto auto auto auto ;
  grid-template-rows: auto auto  auto auto  ;
 
 
     height:100% ;
  width:100% ;
  position:relative;
 
}

.grid-container1 > div {
  background-color:white;
  
  width: 300px;
  height: 420px;
 
}
  
  </style>
  <body>
  <nav class="navbar navbar-inverse navbar-fixed-top" style="background-color:white ; ">
  <div class="container-fluid">
    
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav"  style="padding-left:300px;">
	   <li><a href="home.html" style="  color:black;">HOME</a></li>
	   <li><a href="#" style="  color:black;">NEW ARRIVALS</a></li>
         <li><a href="#" style="color:black;" >WOMEN</a></li>
        <li><a href="#" style="color:black;">MEN</a></li>
        <li><a href="#" style="color:black;">BOYS</a></li>
        <li><a href="#" style="color:black;">GIRLS</a></li>
        <li><a href="fragnance.html" style="color:black;" >FRAGNACE</a></li>
		 
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="myaccount.html" style="color:black;"><span class="glyphicon glyphicon-user"></span> Your Account</a></li>
        <li><a href="#" style="color:black;"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
      </ul>
    </div>
  </div>
</nav>
<br><br><br><br><br><br>
  <div class="container-fluid" style="width:100%;height:150px;color:white;background-color:black;">
  <h1 style="color:white;font-size:50px;padding-left:500px;padding-top:30px;">MY ACCOUNT</h1>
  
  </div>
  <br>  <div class="gggrid-container1">
   <div class=" container"  style=" ">
 
   <h1 style="color:black;font-size:30px; padding-right:280px;"><b>LOGIN</h1><br>
  <p style="padding-right:450px;font-size:16px;"> Email *</p>
    <input type="text" name="FirstName" value=" " style="padding-right:100px;"><br><br>
	  <p style="padding-right:420px;font-size:16px;"> Password *</p>
	 <input type="password" name="pwd" maxlength="8" style="padding-right:100px;"><br><br>
	 <button type="button" class="btn btn-primary" style="background-color:black;radius:0px  ;height:40px;width:90px;">LOGIN</button>
	 <br><br>
	 <button type="button" class="btn btn-link">Forgot your password? </button>   
   </div>
   
  <div class=" container"  style=" height:750px;">
   <h1 style="color:black;font-size:30px; "><b>REGISTER</h1><br>
     <p style=" font-size:16px;"> FirstName *</p>
    <input type="text" name="FirstName" value=" " style="padding-right:100px;"><br><br>
	  <p style="padding-right:450px;font-size:16px;"> Lastname *</p>
    <input type="text" name="FirstName" value=" " style="padding-right:100px;"><br><br>
  <p style="padding-right:450px;font-size:16px;"> Email *</p>
    <input type="text" name="FirstName" value=" " style="padding-right:100px;"><br><br>
	  <p style="padding-right:420px;font-size:16px;"> Password *</p>
	 <input type="password" name="pwd" maxlength="8" style="padding-right:100px;"><br><br><br><br>
	  <button type="button" class="btn btn-primary" style="background-color:black;radius:0px  ;height:40px;width:140px;">REGISTER</button>
   </div>
  </div>
 
   
  
   </body>
  
  </head>s
  </html>