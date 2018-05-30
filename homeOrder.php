 <?php 
 
  include 'header.php';
 
  //include ('orderProcess.php');
  
  $services = array('Baby Photography'=>1000,'Baby Passport'=>800,'Face Painting'=>500,'Gele Tying'=>700,'ID Passport Photo'=>700,'International Passport Photo'=>700,'Make Up'=>700,'PhotoBook'=>700,'Photo Archiving'=>700,'Potrait Photo'=>700);
  
  //$services['']
  
  ?> 
 <br>
   
<hr>
  <div class="container">

    <form class="well form-horizontal" action="processorder.php" method="post" id="contact_form">
<fieldset>

<!-- Form Name -->
<legend><center><h2><b>Home Photo Shoot & Studio Form</b></h2></center></legend><br>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">First Name</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="fname" placeholder="First Name" class="form-control" type="text" autofocus required>
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Last Name</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="lname" placeholder="Last Name" class="form-control" type="text" required>
    </div>
  </div>
</div>

<!-- Check box-->
<div class="form-group"> 
<label class="col-md-4 control-label">Services</label>
<div class="col-md-4 inputGroupContainer">
<?php 
 foreach($services as $name=>$amount){
 	?>
 	<div class="form-check">
  <label class="form-check">
    <input type="checkbox" name="check_list[<?php echo $name; ?>]" value="<?php echo $amount; ?>">
    <?php echo $name; ?> - <span style="color:red;"><?php echo $amount; ?></span>
  </label>
</div>
 	<?php
 }
?>
</div>
</div>
  
<!-- Date input-->
<div class="form-group">
  <label class="col-md-4 control-label">Date</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group date" id="datetimepicker">
  <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
  <input name="date" class="form-control" type="date" required>
    </div>
  </div>
</div>


<!-- Text input-->
       <div class="form-group">
  <label class="col-md-4 control-label">E-Mail</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input name="email" placeholder="E-Mail Address" class="form-control" type="email" required>
    </div>
  </div>
</div>


<!-- Text input-->
       
<div class="form-group">
  <label class="col-md-4 control-label">Contact No.</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
  <input name="contact" placeholder="(234)" class="form-control" type="tel" required>
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" >Address</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="address" placeholder="address" class="form-control"  type="address">
    </div>
  </div>
</div>


<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Additional Notes</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <textarea name="message" class="form-control" placeholder="Additional notes is optional" ></textarea>
    </div>
  </div>
</div>


<!-- Select Basic -->

<!-- Success message -->
<!--<div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Success!.</div>-->

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
 <div class="col-md-4"><br>
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    <button type="submit" name="submit" class="btn btn-warning">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspCHECK OUT <span class="glyphicon glyphicon-send"></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
  </div>
</div>

</fieldset>
</form>
</div>
  <!-- /.container -->
  <?php
  
  ?>
 
 
 
  
	<!-- js -->
<script src="js/jquery-2.1.4.min.js"></script> 
<script src="js/JiSlider.js"></script>
		
		 
			<script src="js/jarallax.js"></script>
	<script src="js/SmoothScroll.min.js"></script>
	 

<!-- start-smoth-scrolling -->
<script src="js/jqBootstrapValidation.js"></script>		 
<!-- //stats -->
<!-- start-smooth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
 
 

<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>


</body>
</html>
 
 
 
 
 

 <?php #include 'footer.php';?>
 
