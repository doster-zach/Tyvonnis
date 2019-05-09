<footer>
<script>
  $(document).ready(function() {
      $("#contact-form").click(function(e) {
          e.preventDefault();
          $.ajax({
              url: '/partials/sendEmail.php',
              type: 'POST',
              data: {
                  email: 'dosterz97@gmail.com',
                  message: 'hello world!'
              },
              success: function(msg) {
                  alert('Email Sent');
              }               
          }); 
      });
  });
</script>
  <div class="footer-container">
    <div class="left-wrapper">
      <div class="left">
        <h3>Get in touch.</h3>
        <form id="contact-form" class="contact-form" accept-charset="UTF-8">         
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