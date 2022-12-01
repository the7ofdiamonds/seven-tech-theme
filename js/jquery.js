(function($) {
  $('#loginForm').on('submit', (e) => {
    var ajaxurl = 'http://localhost/wp-admin/admin-ajax.php';
    var ajaxLogin = $('#loginForm').serialize();

    $.ajax({
      type: 'POST',
      url: ajaxurl,
      data: ajaxLogin,
      success: () => {
              document.location.href = document.referrer;
      },
      error: (request, status, error) => {
          return error;
      }
    });
    
    e.preventDefault();
  });
})(jQuery);


$('#loginForm #remember').on('change', function() {
    if ($(this).is(':checked')) {
      $(this).attr('value', 'true');
    } else {
      $(this).attr('value', 'false');
    }
});

