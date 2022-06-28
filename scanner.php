<!DOCTYPE html>
<html>
<head>
	<title>Scanner</title>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/spinner.css">
	<script src="js/html5-qrcode.min.js"></script>
</head>

<style>
	.scanner-nav{
		background-color: #00ccff;
		color: #fff;
	}
	.time{
		color: #4c4e52;
		font-weight: bold;
		font-size: 45px
	}
	.user-not-found{
		color: #FF0000;
	}
	.first-col{
		background-color: #f1f1f1;
	}
	h5{
		color: #ffff;
	}
	a{
		color: #ffff;
	}
</style>

<body>
	

	<!-- As a heading -->
<nav class="navbar scanner-nav">
  <span class="navbar-brand mb-0 h1">Bicol University Traze</span>
  <div class="float-right d-flex justify-content-center">
	  <h5 class="mr-3" >June 18, 2022</h5>
	  <h5 class="mr-5">8:30 am</h5>
  	  <a href="" class="ml-3 mr-3">Logout</a>
  </div>
  
</nav>

<div class="container-fluid mt-3">
  <div class="spinner-border d-flex justify-content-center" role="status" >
	 <div class="loader" style="bottom: 38%;" id="spinner"></div>
  </div>
  <div class="row">

	     <div class="col-md ml-4 first-col" >
	     	<h6 class="d-flex justify-content-center mt-3"> PLease have your QR Code Scanned here for Attendance </h6>
	     <div id="reader" class="mt-4">Result Here</div>

	    </div>

	    <div class="col-md d-flex justify-content-center ">
	      <div class="card ml-3 mt-3 mb-3" style="width: 30rem;">   	  
			<img class="card-img-top" src="assets/img/user-not-found.jpg" alt="Card image cap" id="user-picture">
		  </div>
		</div>

		  <div class="col-md mt-3 mr-4"  >

		  <h1 class="user-not-found mb-4" id="text-user-not-found">User Not Found!</h1>
			   <div id="user-details">

			   
		  		<h1 class="mb-4">Welcome</h1>
      			<table class="table table-borderless" >
				  <tbody>
				    <tr>
				      <th scope="row">Name</th>
				      <td id="user-fullname"></td>
				    </tr>
				    <tr>
				      <th scope="row">User</th>
				      <td id="user-type"></td>
				    </tr>
				    <tr>
				      <th scope="row">ID No.</th>
				      <td id="user-id"></td>
				    </tr>
				    <tr>
				      <th scope="row">Campus</th>
				      <td id="user-campus">Bicol University Polangui Campus</td>
				    </tr>
				    <tr>
				      <th scope="row">Date</th>
				      <td id="user-date">June 18, 2022</td>
				    </tr>
				    <tr>
				      <th scope="row">Time:</th>
				      <td class="time" id="user-time">8:30 AM</td>
				    </tr>
				  </tbody>
				</table>

				</div>
    	</div>

	  </div>
    </div>
  </div>
</div>

<footer class="mt-5">
	<center>
	2021-2022 Bicol University Polangui Campus, Bicol University Traze Website
	</center>
</footer>


<script src="./js/jquery.min.js"></script>
<script src="./js/moment.min.js"></script>

<script src="./js/html5-qrcode.min.js"></script>
<script src="./js/main.js"></script>



</body>
</html>