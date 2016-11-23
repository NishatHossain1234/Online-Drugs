<!DOCTYPE HTML>
<html>
<head>
<title>Drugs an E-Commerce online Order Category Flat Bootstrap Responsive Website Template|</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Drugs Responsive web template, Bootstrap Web Templates, Android Compatible web template,Smartphone Compatible web template" />
<script type="application/x-javascript"> addEventListener("load", function() 
{ setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="http://css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="style.css" rel="stylesheet" type="text/css">




</head>
<body>
<div id="main">
<h1>Online Demand Drugs </h1>
<div id="login">
<h2>Login Form</h2>
<form action="" method="post">
<label>UserName :</label>
<input id="name" name="username" placeholder="username" type="text">
<label>Password :</label>
<input id="password" name="password" placeholder="**********" type="password">
<input name="submit" type="submit" value=" Login ">
<span><?php echo $error; ?></span>
</form>
</div>
</div>



<div class="banner">
   	  <div class="container">
   	  	<div class="header_top">
   	  	   <div class="header_top_left">
	  	      <div class="box_11"><a href="checkout.html">
		      <h4> <p>Drugs: <span class="simpleCart_total"></span> 
			  (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> items)</p>
			  <img src="C:\xampp\htdocs\drugs.png" alt=""/>
			  <div class="clearfix"> </div></h4>
		      </a></div>
	          <p class="empty"><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>
	          <div class="clearfix"> </div>
	       </div>
           <div class="header_top_right">
		  	 <div class="lang_list">
				<select tabindex="4" class="dropdown">
					<option value="" class="label" value="">Taka</option>
				</select>
			 </div>
			 <ul class="header_user_info">
			  <a class="login" href="login.html">
				<i class="user"> </i> 
				<li class="user_desc">My Account</li>
			  </a>
			  <div class="clearfix"> </div>
		     </ul>
	      	<div class="clearfix"> </div>
	      </ul>
	  </div>
	  <div class="clearfix"> </div>
	 </div>
	 <div class="contact_form">
	 	<h2>Feedback</h2>
	    <form>
			<div class="col-md-6 to">
             	<input type="text" class="text" value="Name" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Name';}">
			 	<input type="text" class="text" value="Email" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Email';}">
			 	<input type="text" class="text" value="Subject" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Subject';}">
			</div>
			<div class="col-md-6 text">
               <textarea value="Message" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Message';}">Message</textarea>
            </div>
            <div class="clearfix"></div>
            <div class="but__center"><input type="submit" value="Send message &gt;&gt;"></div>
        </form>
     </div>
    </div>
   </div>
   <div class="map">
	   <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3150859.767904157!2d-96.62081048651531!3d39.536794757966845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1408111832978"> </iframe>
   </div>
   <form action="logout.php" method="post">
    <input name="return" type="hidden" value="<?php echo urlencode($_SERVER["PHP_SELF"]);?>" />
    <input type="submit" value="logout" />
</form>
  
			 
			 
			 
			</body>
</html>