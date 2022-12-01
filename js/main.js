//Header
function toggleMenu(){
  var dropdown = document.querySelectorAll('#dropdown');
  var middle = document.querySelector('#middle');

  middle.classList.toggle('not-active');

  dropdown.forEach(function (btn) {
    btn.classList.toggle('is-active');
  });

  console.log("Clicked")
};


//Invoice
function getBillToForm() {
  jQuery(document).ready(function($) {

    $(document).ready(function(){
  var name = $('input#bill-to-name').val();
  var street = $('input#bill-to-street').val();
  var city = $('input#bill-to-city').val();
  var state = $('input#bill-to-state').val();
  var zip = $('input#bill-to-zip').val();
  var email = $('input#bill-to-email').val();



  $("#invoice-bill-to-name").html(name);
  $("#invoice-bill-to-street").html(street);
  $("#invoice-bill-to-city").html(city);
  $("#invoice-bill-to-state").html(state);
  $("#invoice-bill-to-zipcode").html(zip);
  $("#invoice-bill-to-email").html(email);
  $("form #quote-bill-to").submit(function(e){
    e.preventDefault();
  });
  console.log(name);
  console.log(email);
    });
  });
  
}

//Contact
jQuery(function($) {
  
  $("#contact-form").submit(function(e){
    var $to = get_option( 'admin_email' );
    var $from = $("#contact-email").val();
    var $subject = $("#subject").val();
    var $message = $("#message").val();
    var $headers = "Content-type: text/html";
  
    wp_mail( $to, $subject, $message, $headers );
      
        console.log($to);
    
        e.preventDefault();
  });
});