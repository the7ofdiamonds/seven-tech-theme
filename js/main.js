//Header
function toggleMenu() {
  var dropdown = document.querySelector('#dropdown');
  var open = document.querySelectorAll('#open');
  var close = document.querySelector('#close');

  close.classList.toggle('is-active');

  open.forEach(function (btn) {
    btn.classList.toggle('not-active');
  });

  dropdown.classList.toggle('is-active');
};


//Invoice
function getBillToForm() {
  jQuery(document).ready(function ($) {

    $(document).ready(function () {
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
      $("form #quote-bill-to").submit(function (e) {
        e.preventDefault();
      });
      console.log(name);
      console.log(email);
    });
  });

}


jQuery(function ($) {

  $('.wp-block-group').addClass('card');
});
