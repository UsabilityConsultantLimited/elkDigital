 <?php 
 
  include 'header.php';
 
  //include ('orderProcess.php');
  
  $services = array('Baby Photography'=>1000,'Baby Passport'=>800,'Face Painting'=>500,'Gele Tying'=>700,'ID Passport Photo'=>700,'International Passport Photo'=>700,'Make Up'=>700,'PhotoBook'=>700,'Photo Archiving'=>700,'Potrait Photo'=>700);
  
  //$services['']
  
  ?> 
 <br>
   
<hr>



<div class="_container" style="width: 50%; position: relative; margin: 0 auto;">
 <?php 
  
 
 if(isset($_POST['order']))
  {
  	$r = pushMail($_POST['order'],$_POST['to']);
  	echo $r;
  }
  else
  {
  	
	 $recipient = 'info@elkdigitalsolutions.com.ng'; // Change this email to your preferred recipient choice
	 
	 $checklist = 'check_list';
	 $wlist = array('submit');
	 $oServices = array();
	 $total = 0;
	 
	 $output = '';
	 
	  if(isset($_POST)){
	  	$output .= "PERSONAL DETAILS \r\n";
	  	echo "<strong>PERSONAL DETAILS</strong><br>";
	  	foreach($_POST as $k=>$v){
	  	 if(in_array($k,$wlist))
	  	  continue;
	  	 if($k==$checklist)
	  	  $oServices = $v;
	  	 else
	  	 {
		 	$output .= "$k: $v \r\n";
		 	echo  "$k: $v<br>";
		 }
		}
		
		$output .= "\r\n ITEMS ORDERED \r\n Total Items Selected: ".count($oServices)."\r\n";
		echo "<br><strong>ITEMS ORDERED</strong><br> Total Items Selected: ".count($oServices)."<br>";
		 
		 foreach($oServices as $item=>$price){
		 	$total += $price; 
		 	$output .= "$item - NGN$price \r\n";
		 	echo "$item - NGN$price <br>";
		 }
		 $output .= "\r\n Total Amount: NGN".$total."\r\n";
		 echo "<br><b>Total Amount: NGN".$total."</b></br><br>";
		 if($total<5000)
			 echo"<h4>Sorry! Kindly note that, No Home Service for services below</h4> <strong>NGN5000</strong>";
		 else
		 {
			echo  "We will be glad to book your order right away!";
		 }
	  }
	  
  
?>

 
 <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
  <input type="hidden" name="to" value="<?php echo $recipient; ?>"/>
  <button type="submit" name="order" value="<?php echo $output; ?>" class="btn btn-warning">Proceed</button>
 </form>
 
<?php
 }
 

  function pushMail($msg,$email){ 
	 
	$subject = 'El-K Lab Order Request'; // Give the email a subject 
	
	$message = "$msg"; // Our message above including the link
	                     
	$headers = 'From:noreply@elkdigitalsolutions.com.ng' . "\r\n"; // Set from headers
	
	 $msg = "<br><br><center>We have received your request order successfully... Thank you!</center>";
	 
	if(mail($email, $subject, $message, $headers)===true) // Send our email
	 return $msg;	
	else
	{
 		$msg = "We could not proccess your order at this time, please try again!";
 		return $msg;
	}
  }
 ?>
</div>


  

<?php #include 'footer.php';?>