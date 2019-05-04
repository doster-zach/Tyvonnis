<!DOCTYPE html>
<html>
    <head>
        <title>Tyvannis</title>
        <?php require '../partials/head.php'; ?>
    </head>
    <body>
        <?php require '../partials/nav.php'; ?>
        <div class="loginForm-container">
          <h3>Sign Up / Login</h3>
          <form class="loginForm">
            <label for="firstName">First Name</label>
            <input type="text" name="firstName" id="firstName">
            <label for="lastName">Last Name</label>
            <input type="text" name="lastName" id="lastName">
            <label for="email">Email</label>
            <input type="text" name="email" id="email">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" minlength="8" required>
          </form>
          <button class="sign-in-button">
            Login / Sign Up
          </button>
        </div>
        <?php require '../partials/footer.php'; ?>
    </body>
</html>