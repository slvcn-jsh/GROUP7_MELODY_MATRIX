<?php include 'includes/header.php'; ?>

<section class="container d-flex align-items-center justify-content-center" style="min-height: 80vh;">
    <div class="w-100" style="max-width: 400px;">
        <h2 class="mb-4 text-center" style="color: #d32f2f; font-weight: 700;">Log In</h2>
        <form method="post" action="#">
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-accent w-100 mb-2">Log In</button>
            <div class="d-flex justify-content-between align-items-center mb-2">
                <a href="#" style="color: #d32f2f; font-weight: 600;">Forgot Password?</a>
            </div>
            <div class="text-center">
                <small>New here? <a href="signup.php" style="color: #d32f2f; font-weight: 600;">Sign Up</a></small>
            </div>
        </form>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
