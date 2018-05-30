 <?php include 'header.php';?>
 
<!-- <img src="images/studioBanner.jpg"   width="100%" height="500" alt="BAnner" > -->
  

   
<hr>
  <div class="container">

    <form class="well form-horizontal" action="payment.php" method="post"  id="contact_form">
<fieldset>

			 		<div class="row">
        				<div class="col-xs-8">
			 		
<!-- Form Name -->
<legend><center><h2><b>Order Form</b></h2></center></legend><br>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">First Name</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="first_name" placeholder="First Name" id="first_name" class="form-control" type="text">
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Last Name</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="last_name" placeholder="Last Name" id="last_name" class="form-control" type="text">
    </div>
  </div>
</div>

  <div class="form-group"> 
  <label class="col-md-4 control-label">Services</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select name="service" id="service" class="form-control selectpicker">
      <option value="">Select your service</option>
      <option>Photo Print Online</option>
      <option>Black and White Print</option>
      <option >Canvases Print</option>
       
    </select>
  </div>
</div>
</div>
  
  
  <div class="form-group"> 
  <label class="col-md-4 control-label">Sizes</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select name="size" id="size" class="form-control selectpicker">
      <option >Select your size</option>
      <option>3 x 5</option>
      <option>4 x 7</option>
      <option>A4 Size</option>
       
    </select>
  </div>
</div>
</div>
  
 
<!-- Text input-->

 <div class="form-group">
  <label class="col-md-4 control-label">Quantity</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="quantity" placeholder="Enter quantity" class="form-control" id="quantity" type="text">
    </div>
  </div>
</div>

<!-- Text input-->



<!-- Text input-->
       <div class="form-group">
  <label class="col-md-4 control-label">E-Mail</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input name="email" placeholder="E-Mail Address" id="email" class="form-control" type="text">
    </div>
  </div>
</div>


<!-- Text input-->
       
<div class="form-group">
  <label class="col-md-4 control-label">Contact No.</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
  <input name="contact_no" placeholder="(234)" id="contact_no" class="form-control" type="text">
    </div>
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" >Address</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="user_password" placeholder="Address" id="address" class="form-control"  type="address">
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" >Delivery Type</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
   
  <input type="radio" name="delivery" id="delivery" value="clickCollect">Click To Deliver<br>
  <input type="radio" name="delivery" id="delivery" value="clickPickup"> Click To PickUp
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Additional Notes</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <textarea name="message"  class="form-control">Additional notes is optional</textarea>
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" >Select Images</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
   
  <input name="img" class="form-control" id="img" type="file" multiple>
    </div>
  </div>
<button type="button" class="btn btn-dark" id="vb">View Basket</button>
</div>

			 			</div>
			 			
<div class="col-xs-4" id="basket">
	<div class="form-group">
	   
	    <div class="col-md-12 inputGroupContainer">
	    <div>
		<!-- --<iframe src="payment.html" height="300" style="border:2px solid grey;"></iframe><!-- -->
		<?php require "payment.php"; ?>
	  <button type="Check Out" class="btn btn-warning" >CHECK OUT <span class="glyphicon glyphicon-send"></span></button>   
	    </div>
	  </div>
	</div>
</div>
			 		</div>


<!-- Select Basic -->

<!-- Success message -->
<div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Success!.</div>

</fieldset>
</form>
</div>
    </div><!-- /.container -->
 
 
 

<?php include 'footer.php';?>

