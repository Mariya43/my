<!DOCTYPE html>
<html lang="zxx">
<head>
<title>Esteem  An Admin Panel Category Flat Bootstrap Responsive Website Template | Sign Up :: w3layouts</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Esteem Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/snow.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/component.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style_grid.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome-icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome-icons -->
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
</head>
<body>
		

<?php
if(isset($_POST['submit']))
{


	include("config.php");

      
$name =$_POST['uname'];


$email =$_POST['email'];
$password =$_POST['password'];

$r =$_POST['rpassword'];

if(!empty($_FILES['file']['name'])){


	$names =$_FILES['file']['name'];
	$tmp_name =$_FILES['file']['tmp_name'];
	$location = 'upload/';
	$path =$location.$names;
	if(move_uploaded_file($tmp_name, $path))
{
	$sql="insert into reg(name,username,password,r_password,img)values('$name','$email','$password','$r','$path' )";
	mysqli_query($con,$sql);
	if($sql){
		
		$result="account create successfully";
		
}
else
{
	

$result="account not create ";


} }
else {
	$result="error"; 
}}
else{
	$result='please choose file :(';}
}

?>





						<div class="pages_agile_info_w3l">
							<!-- /login -->
							   <div class="over_lay_agile_pages_w3ls two">
								<div class="registration">
								
												<div class="signin-form profile">
													<h2>Sign up Form</h2>
													<div class="login-form">
														<form action="#" method="post" enctype ="multipart/form-data">
															<input type="text" name="uname" placeholder="Username" required="">
																<input type="email" name="email" placeholder="E-mail" required="">

																<input type="password" name="password" placeholder="Password" required="">
																<input type="password" name="rpassword" placeholder="Confirm Password" required="">
																
																<input type="file" name="file" placeholder="choose file" required="">
							 <label>
                             
                             <?php if(isset($_POST["submit"]))
							 echo $result;  
							 ?>
                             
                             
                             </label>
															<div class="tp">
																<input type="submit" name="submit" value="SIGN Up">
															</div>
														</form>
													</div>
													
													<p><a href="#"> By clicking Sign Up, I agree to your terms</a></p>
													
													 <h6><a href="main-page.php">Back To Home</a><h6>
												</div>
										</div>
										<!--copy rights start here-->
											<div class="copyrights_agile two">
												 <p>© 2017 Esteem. All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
											</div>	
											<!--copy rights end here-->
						    </div>
						</div>
							<!-- /login -->
<!-- //pages_agile_info_w3l -->


<!-- js -->

          <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
		  <script src="js/modernizr.custom.js"></script>
		
		   <script src="js/classie.js"></script>
		  <script src="js/gnmenu.js"></script>
		  <script>
			new gnMenu( document.getElementById( 'gn-menu' ) );
		 </script>
	
<!-- //js -->

<script src="js/screenfull.js"></script>
		<script>
		$(function () {
			$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

			if (!screenfull.enabled) {
				return false;
			}

			

			$('#toggle').click(function () {
				screenfull.toggle($('#container')[0]);
			});	
		});
		</script>
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<script src="js/snow.js"></script>
 <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>


</body>
</html>