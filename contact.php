<!DOCTYPE html>
<head>
<title>All Scruff An' Crufts - Professional Dog Grooming</title>

<!-- Style Includes -->
<link rel="stylesheet" type="text/css" href="styles.css">
<!-- End Of Style Includes -->

<!-- Search engine stuff! -->
<meta name="keywords" content="PUT KEYWORDS HERE" />
<meta name="Description" content="PUT DESCRIPTION HERE" />
<meta name="Author" content="James New @ JN Design" />
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<link href='http://fonts.googleapis.com/css?family=Monda' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:600' rel='stylesheet' type='text/css'>
<!-- End of search engine stuff! -->

<!-- Script Includes -->

<!-- End Of Script Includes -->
</head>
<html>
<body>
	<div id="header">
		<div id="header_container">
			<div id="left_logo">
			<img src="images/Logo.png" >

			</div>

			<div id="right_nav">
				
				<div id="contact">
					<p>Tel:0151 201 2844 </p>
					<p>Email:<a href="mailto:joebloggs@hotmail.co.uk">debbie@allscruffsancrufts.co.uk</a>

					</p>
				</div>

				<div id="navbar">
					<ul>
						<li><a class="nav" href="index.html">Home</a></li>
						<li><a class="nav" href="about.html">About</a></li>
						<li><a class="nav" href="services.html">Services</a></li>
						<li><a class="nav" href="gallery.html">Gallery</a></li>
						<li><a class="nav" href="contact.php">Contact</a></li>

				</div>

			</div>


		</div>
	
	</div>
		<div id="wrapper" class="clearfix" >
	  
		     <div id="content" class="clearfix">

		     	<div id="heading">
		     		<h2>Get In Touch With All Scruff An' Crufts ...</h2>
		     	</div>



		     		<div id="contactleft">

		     		<div id="form">

		     			<div id="contact_form">
		     				Please fill in the form and I will respond ASAP...
									 
									 
								
								<?php
							    $name = $_POST['name'];
							    $email = $_POST['email'];
							    $message = $_POST['message'];
							    $from = 'From: Wirral PT Enquiry'; 
							    $to = 'info@wirralpt.co.uk'; 
							    $subject = 'Hello';
							    $human = $_POST['human'];
										
							    $body = "From: $name\n E-Mail: $email\n Message:\n $message";
											
							   if ($_POST['submit']) {
							    if ($name != '' && $email != '') {
							        if ($human == '2') {				 
							            if (mail ($to, $subject, $body, $from)) { 
								        echo '<p>Your message has been sent!</p>';
								    } else { 
								        echo '<p>Something went wrong, go back and try again!</p>'; 
								    } 
								} else if ($_POST['submit'] && $human != '4') {
								    echo '<p> 1+1=2!! </p>';
								}
							    } else {
							        echo '<p>You need to fill everything!!</p>';
							    }
}
							?>
																							
																												        
							    <label>Name (Required)</label>
							    <input name="name" placeholder="Please Enter Your Name">         
								<label>Email (Required)</label>
								<input name="email" type="email" placeholder="example@hotmail.com">						            
								<label>Enquiry</label>
								<textarea name="message" placeholder="Please enter your query within this box"></textarea>   
								<label>What is 1+1? (Verification)</label>
								<input name="human" placeholder="Type Here">
								<br /><br />							            
								<input id="submit" name="submit" type="submit" value="Submit">												        
								
								</form>
							
									 </div>	
						</div>

		     		</div>

		     		<div id="contactright">
		     			<h4>Or You can find us at...<br /><br /></h4>

		     			<p class="largemap">
		     			<img src="images/googlemap.jpg"
		     			</p>
		     			<p class="largemaptext">
		     				<a href="https://maps.google.co.uk/maps/ms?msa=0&amp;msid=211506874882660024081.0004d2682cdd8fb114761&amp;ie=UTF8&amp;ll=53.383381,-3.033011&amp;spn=0.000028,0.000002&amp;t=m&amp;source=embed">View on a large map</a>
		     			</p>

		     			<p>
		     				32 Dingle Road<br />
		     				Birkenhead<br />
		     				Wirral<br />
		     				CH64 32R<br />
		     			</p>

		     			<div class="getintouch">
		     				<h4>Other ways to get in touch...</h4>
		     				Tel:0151 2012844<br />
		     				Mobile Tel: 07790451417<br />
		     				Email:debbie@allscruffsancrufts.co.uk
		     			</div>




		     		</div>

		     	
		     </div>
	  
	  

	 			<div id="push"> </div><!-- Used For Sticky Footer -->

		</div><!-- End Of Wrapper -->
	


	 <div id="footer">
	 	<div id="footer_container">
	 	 	<div id="map">
	 	 	Come An See Us...<br /><br />
	 	 	<p class="address">
	 	 		32 Dingle Road<br />
	 	 		Birkenhead<br />
	 	 		Wirral<br />
	 	 		CH64 32T
	 	 	<p>

	 	 	<p class="map">
	 	 	<iframe width="230" height="150" frameborder="1" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.uk/maps/ms?msa=0&amp;msid=211506874882660024081.0004d2682cdd8fb114761&amp;ie=UTF8&amp;t=m&amp;ll=53.383392,-3.03301&amp;spn=0.001126,0.002146&amp;z=17&amp;output=embed"></iframe>

	 	 	</p>

	 	 	</div>

	 	 	<div id="social">
	 	 	Socially Connect...<br /><br />
	 	 	 <a href="http://www.twitter.com/@wirralpt">	<div id="twitter">  		<ul id="twitter_update_list"></ul>  
        <script type="text/javascript" src="http://twitter.com/javascripts/blogger.js"></script>  
        <script type="text/javascript" src="http://api.twitter.com/1/statuses/user_timeline/jameznew.json?callback=twitterCallback2&amp;screen_name=google&amp;count=1&amp;include_rts=true"></script>  ​
	       	</div></a>

	       	<div id="fb">
	       		       </div>
	 	 	
	 	 	</div>

	 	 	<div id="copyright">
	 	 		- Website Designed & Developed By <a href="http://www.jn-design.co.uk">JN Design </a>- 

	 	 	</div>


	 	</div>
	 </div>	<!-- End Of Footer -->








</body>
</html>