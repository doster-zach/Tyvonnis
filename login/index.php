<!DOCTYPE html>
<html>
    <head>
        <title>Tyvannis</title>
        <?php
        session_start();
        require '../partials/head.php'; 
        ?>
    </head>
    <body>
        <?php 
        require '../partials/nav.php'; 
        if(isset($_SESSION['login_error'])) { 
        ?>
        <div class="login-error">
          <p>
           <?php
            echo $_SESSION['login_error'];
            $_SESSION['login_error'] = 'hi there';
           ?>
          </p>
        </div>
        <?php } ?>
        <div class="loginForm-container">
          <h3>Login</h3>
          <form method="post" action="./login.php" id="loginForm" class="loginForm" accept-charset="UTF-8">
            <label for="email-login">Email</label>
            <input type="text" name="email" id="email-login" autocomplete="username email" required>
            <label for="password-login">Password</label>
            <input type="password" name="password" id="password-login" minlength="8" autocomplete="current-password" required>
          </form>
          <input type="submit" value="Sign Up" class="sign-in-button">
          <button class="create-account-button" onclick="changeForms()">
            Create Account
          </button>
        </div>
        <div class="signUpForm-container hidden">
          <h3>Sign Up</h3>
          <form method="post" action="./signUp.php" id="signUpForm" class="signUpForm" accept-charset="UTF-8">
            <label for="firstName-sign-up">First Name</label>
            <input type="text" name="firstName" id="firstName-sign-up" required>
            <label for="lastName-sign-up">Last Name</label>
            <input type="text" name="lastName" id="lastName-sign-up" required>
            <label for="email-sign-up">Email</label>
            <input type="text" name="email" id="email-sign-up" autocomplete="username email" required>
            <label for="password-sign-up">Password</label>
            <input type="password" name="password" id="password-sign-up" minlength="8" autocomplete="new-password" required >
            <input type="submit" value="Sign Up" class="sign-in-button">
          </form>
        </div>
        <?php require '../partials/footer.php'; ?>
        <script>          
          function changeForms() {
            $(".signUpForm-container").toggleClass("hidden");
            $(".loginForm-container").toggleClass("hidden");
          }
        </script>
        <?php session_destroy(); ?>
    </body>
</html>