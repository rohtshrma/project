<!DOCTYPE html>
<html>
<head>
	<title>CONTACT US</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>

<section>
<div class="container-fluid text-white bg-dark pl-0 pr-0 ">
 
	<nav class="navbar  navbar-expand-lg navbar-dark  ">
  <a class="navbar-brand" href="bootstrap.php">NEWSROOM</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	<span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	<ul class="navbar-nav justify-content-end ml-auto">
	  <li class="nav-item ">
		<a class="nav-link" href="bootstrap.php">Home <span class="sr-only">(current)</span></a>
	  </li>
	  <li class="nav-item ">
		<a class="nav-link" href="ABOUTUS.php">ABOUT US</a>
	  </li>
	  <li class="nav-item ">
		<a class="nav-link" href="national.php">NATIONAL</a>
	  </li>
	  <li class="nav-item ">
		<a class="nav-link" href="international.php">INTERNATIONAL</a>
	  </li>
	  <li class="nav-item ">
		<a class="nav-link" href="sports.php">SPORTS</a>
	  </li>
	  <li class="nav-item active">
		<a class="nav-link" href="contactus.php">CONTACT US</a>
	  </li>
	  
	 
  </div>
</nav>

</section>

<!--nav end-->

<section>
  <div class="container bg-light">
	<br>
	  <div class="row">
		   <div class="col-sm-12 col-md-12 col-lg-12  pl-0 pr-0">
			<section style="border: solid; margin: ">
				<iframe class="pb-0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3782.8547195945885!2d73.87826291441941!3d18.53546618740039!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2c0f908b21373%3A0x247ebe3582b873aa!2sCannaught%20Place%2C%20Bund%20Garden%20Rd%2C%20Sangamvadi%2C%20Pune%2C%20Maharashtra%20411001!5e0!3m2!1sen!2sin!4v1590902454162!5m2!1sen!2sin" width="100%" height="500" frameborder="0" style="border:0; " allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
			</section> </div>


		<!--form starts-->


			<div class="col-sm-6 col-md-6 col-lg-6 mt-3  pl-0 pr-0">
				<section style="border: solid; margin: ">
				<h2 class="text-center mb-4"><u>CONTACT US HERE</u></h2> 
				 <form action="/action_page.php" class="needs-validation" novalidate>
    <div class="form-group">
      <label for="uname" class="pl-2 "><b>Name:</b></label>
      <input type="text" class="form-control" id="uname" placeholder="Enter Name" name="name" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="Email" class="pl-2"><b>Email</b></label>
      <input type="Email" class="form-control" id="Email" placeholder="Enter Email" name="Email" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>

    <div class="form-group">
      <label for="textarea" class="pl-2"><b>Comments</b></label>
      <input type="textarea" class=" md-textarea form-control"  id=" textarea" placeholder="Enter Comments" name="Comment" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>

    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember" required> I agree on the terms and conditions.
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Check this checkbox to continue.</div>
      </label>
    </div>
    <button type="submit" class=" ml-2 mb-2 btn btn-success" style="border: solid black;">Submit</button>
  </form>
</section>
</div>

<script>
// Disable form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Get the forms we want to add validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>

				
				<!--form end-->
				<div class="col-sm-6 col-md-6 col-lg-6 mt-3  pl-0 pr-0">
				<section style="height: 416px; border: solid; margin: ">

				<h1 class="text-center"><u>REACH US</u></h1>
				<h5 class="mt-5"><b>ADDRESS:</b></h5>
				<address>Cannaught Place, Bund Garden Rd, Sangamvadi, Pune, Maharashtra 411001</address>
				<h5 class="mt-4">PHONE NUMBER:</h5>
				<p>(07) 3331 5000</p>
				</section>

			</div>

</div> </div> </section> 
<!-- Footer -->
<footer class="page-footer font-small indigo bg-dark mt-2" >

  <!-- Footer Links -->
  <div class="container text-center ">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-4 mx-auto">

        <!-- Links -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4 text-white">Links</h5>

        <ul class="list-unstyled">
          <li>
            <a href="bootstrap.php">HOME</a>
          </li>
          <a href="aboutus.php">ABOUT US</a>
          </li>
          <li>
            <a href="national.php">NATIONAL</a>
          </li>
          <li>
            <a href="international.php">INTERNATIONAL</a>
          </li>
          <li>
            <a href="sports.php">SPORTS</a>
          </li>
          <a href="contactus.php">CONTACT US</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-4 mx-auto">

        <!-- Links -->
        <h4 class="font-weight-bold text-uppercase text-white mt-3 mb-4">Social Media Links</h4>

        <ul class="list-unstyled">
          <li>
            <img src="fb.png" style="height: 30px;">
            <a href="https://www.facebook.com/" class="ml-2">Join with us on facebook</a>
          </li>
          <li  class="mt-3">
            <img src="twitter.png" class="pr-4" style="height: 25px;">
            <a href="https://twitter.com/explore">Join with us on twitter</a>
          </li>
          <li class="mt-3">
            <img src="insta.png" style="height: 30px;">
            <a href="https://www.instagram.com/?hl=en" ">Join with us on instagram</a>
          </li>
        
        </ul>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-4 mx-auto">
        <h3 class="text-white mt-3">CONTACT FORM</h3>

       <form action="" class="was-validated">
    <div class="form-group">
      <label for="uname " class="text-white">Username:
      <input type="text" class="form-control" id="uname" placeholder="Enter username" name="uname" required></label>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="pwd" class="text-white">Password:
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required></label>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember" required> I agree on blabla.
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Check this checkbox to continue.</div>
      </label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

     

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center text-white py-3">© 2020 Copyright:
    <a href="https://mdbootstrap.com/"> MDBootstrap.com</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->



</body>
</html>