/*
  Jquery Validation using jqBootstrapValidation
   example is taken from jqBootstrapValidation docs 
  */
$(function() {
  $('#basket').hide();
  $('#vb').click(function(){
  	viewOrder();
  	$('#basket').show();
  	$('#vb').hide();
  });
 
 /* View Order */
 function viewOrder(){
 	cfname = $('#first_name').val()+' '+$('#last_name').val();
 	cemail = $('#email').val();
 	cphone = $('#contact_no').val();
 	caddress = $('#address').val();
    $('<span> '+cfname+'</span>').appendTo('#cnames');
    $('<span> '+cemail+'</span>').appendTo('#cemail');
    $('<span> '+cphone+'</span>').appendTo('#cphone');
    $('<span> '+caddress+'</span>').appendTo('#caddress');
 }

});


/*When clicking on Full hide fail/success boxes */
$('#name').focus(function() {
    $('#success').html('');
});
