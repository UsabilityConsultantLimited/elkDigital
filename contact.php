<?php include 'header.php';?>
<!-- //header -->


<div class="contact-w3ls" id="contact">
	<div class="container">
	<div class="agileits_heading_section">
				<h3 class="wthree_head">Contact Us</h3>
				<p class="w3l_sub_para_agile">Give us a message</p>
			</div>
	<div class="inner_w3l_agile_grids">
		<div class="contact-w3-agile2" data-aos="flip-left">
			<div class="contact-agileits">
				<h4>Drop a Line</h4>
				<p class="contact-agile2">Sign Up For Our News Letters</p>
				<form action="#" method="post" name="sentMessage" id="contactForm" novalidate>
				  <div class="col-md-6 w3l_area_its">
					<div class="control-group form-group">
                        <div class="controls">
                            <label class="contact-p1">Full Name:</label>
                            <input type="text" class="form-control" name="name" id="name" required data-validation-required-message="Please enter your name.">
                            <p class="help-block"></p>
                        </div>
                    </div>	
                    <div class="control-group form-group">
                        <div class="controls">
                            <label class="contact-p1">Phone Number:</label>
                            <input type="tel" class="form-control" name="phone" id="phone" required data-validation-required-message="Please enter your phone number.">
							<p class="help-block"></p>
						</div>
                    </div>
					</div>
					 <div class="col-md-6 w3l_area">
                    <div class="control-group form-group">
                        <div class="controls">
                            <label class="contact-p1">Email Address:</label>
                            <input type="email" class="form-control" name="email" id="email" required data-validation-required-message="Please enter your email address.">
							<p class="help-block"></p>
						</div>
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <button type="submit" class="btn btn-primary">Send</button>
					</div>	
<div class="clearfix"> </div>					
				</form>            
			</div>
		</div>
		
		<div class="clearfix"></div>
	</div>
</div>
</div>
<div class="contact-w3-agile1 map" data-aos="flip-right">
			
		<iframe src="" class="map" style="border:0" allowfullscreen=""></iframe>
		 
</div>

 
	<!-- //footer -->
<?php include 'footer.php';?>