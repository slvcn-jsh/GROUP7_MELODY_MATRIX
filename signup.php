<?php include 'includes/header.php'; ?>

<section class="container d-flex align-items-center justify-content-center" style="min-height: 80vh;">
    <div class="w-100" style="max-width: 400px;">
        <h2 class="mb-4 text-center" style="color: #d32f2f; font-weight: 700;">Sign Up</h2>
        <form method="post" action="#" novalidate>
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" required aria-label="Username">
                <div class="invalid-feedback">Please enter a username.</div>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required aria-label="Email">
                <div class="invalid-feedback">Please enter a valid email.</div>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required aria-label="Password">
                <div class="invalid-feedback">Please enter a password.</div>
            </div>
            <div class="mb-4">
                <label for="confirm_password" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="confirm_password" name="confirm_password" required aria-label="Confirm Password">
                <div class="invalid-feedback">Please confirm your password.</div>
            </div>
            <button type="submit" class="btn btn-accent w-100 mb-2">Sign Up</button>
            <div class="text-center">
                <small>Already have an account? <a href="login.php" style="color: #d32f2f; font-weight: 600;">Log In</a></small>
            </div>
        </form>
    </div>
</section>
<script>
// Client-side validation
(function () {
  'use strict';
  var forms = document.querySelectorAll('form');
  Array.prototype.slice.call(forms).forEach(function (form) {
    form.addEventListener('submit', function (event) {
      if (!form.checkValidity()) {
        event.preventDefault();
        event.stopPropagation();
      }
      form.classList.add('was-validated');
    }, false);
  });
})();
</script>
<?php include 'includes/footer.php'; ?>
