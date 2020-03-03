<footer>
<script>
(function ($) {
    'use strict';
    var form = $('#contact-form'),
        message = $('#emailMessage'),
        form_data;
    // Success function
    function success(response) {
        message.fadeIn().removeClass('alert-danger').addClass('alert-success');
        message.text(response);
        setTimeout(function () {
            message.fadeOut();
        }, 2000);
        form.find('input:not([type="submit"]), textarea').val('');
    }
    // fail function
    function failure(data) {
        message.fadeIn().removeClass('alert-success').addClass('alert-success');
        message.text(data.responseText);
        setTimeout(function () {
            message.fadeOut();
        }, 2000);
    }
    
    // form.submit(function (e) {
    //     e.preventDefault();
    //     formData = $(this).serialize();
    //     $.ajax({
    //         type: 'POST',
    //         method: 'POST',
    //         url: form.attr('action'),
    //         data: formData
    //     })
    //     .done(success)
    //     .fail(failure);

    // });  
})(jQuery);
</script>
  <div class="footer-container">
    <div class="left-wrapper">
      <div class="left">
        <h3>Get in touch.</h3>
        <div id="emailMessage"></div>
        <form id="contact-form" class="contact-form" action="/partials/sendEmail.php" method="post" accept-charset="UTF-8">         
          <div class="footer-field-name">
            <label for="firstName">First</label>
            <input type="text" name="firstName" id="firstName" required>
          </div>
          <div class="footer-field-name">
            <label for="lastName">Last</label>
            <input type="text" name="lastName" id="lastName" required>
          </div>
          <div class="footer-field-email">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" required>
          </div>
          <div class="footer-field-message">
            <label for="message">Your Message</label>
            <textarea name="message" id="message"></textarea>
          </div>
          <input type="submit" value="Send" class="footer-submit">
        </form>
        <div id="success-container" class="row" hidden>
          <div class="form-group col-xs-4 col-xs-offset-4">
            <div class="row text-center">
              <p>Success!</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="right-wrapper">
      <div class="right">
        <h3>Follow us!</h3>
        <div class="social-container">
          <img src="/assets/general/social/twitter.svg" alt="twitter">
          <img src="/assets/general/social/linkedin.svg" alt="linkedin">
          <img src="/assets/general/social/facebook.svg" alt="facebook">
          <img src="/assets/general/social/instagram.svg" alt="instagram">
        </div>
      </div>
    </div>
  </div>
</footer>