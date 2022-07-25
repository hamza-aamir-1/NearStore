<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/ns-logo.png" type="image/x-icon">
    <title>NS Signup</title>

    <!-- === Bootstrap 5.1.3 CSS === -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Bootstrap 5.1.3 CSS -->

    <!-- === Bootstrap Icons ===-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.0/font/bootstrap-icons.css">
    <!-- Bootstrap Icons -->

    <!-- === CSS === -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- CSS -->

</head>
<body>

<header class="text-center my-5">
    <a href="index.php" class="login_logo">
        <img src="assets/img/ns-logo-text.png" alt="">
    </a>
</header>

<main class="login_main_box mx-auto mb-5 px-4">

    <div class="login_leftbtn_heading py-4 position-relative">
        <button class="btn btn-sm shadow-none position-absolute pt-2" onclick="history.back()">
            <i class="bi bi-arrow-left-circle"></i>
        </button>
        <div class="h2 text-center">
            SIGNUP
        </div>
    </div>

    <!-- Signup Form -->
    <form class="mt-4 pb-5 text-white">
        <div class="mb-3">
            <label for="signupInputName" class="form-label fw-bold">Full Name</label>
            <input type="text" class="form-control shadow-none login_input" placeholder="Hamza Aamir" id="signupInputName">
        </div>
        <div class="mb-3">
          <label for="signupInputEmail1" class="form-label fw-bold">Email address</label>
          <input type="email" placeholder="user@example.com" class="form-control shadow-none login_input" id="signupInputEmail1" aria-describedby="emailHelp" required>
          <div id="emailHelp" class="login_input_text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3 show_hide_password_box signup_password_box">
          <label for="signupInputPassword1" class="form-label fw-bold">Password</label>
          <input type="password" class="form-control shadow-none login_input" placeholder="********" id="signupInputPassword1" required>
          <span><i class="bi bi-eye-slash" id="eyeSignupInputPassword1"></i></span>
        </div>
        <div class="mb-3 show_hide_password_box signup_password_box">
            <label for="signupInputPassword2" class="form-label fw-bold">Confirm Password</label>
            <input type="password" class="form-control shadow-none login_input" placeholder="********" id="signupInputPassword2" required>
            <span><i class="bi bi-eye-slash" id="eyeSignupInputPassword2"></i></span>
        </div>
        <div class="mb-3">
          <input type="checkbox" class="shadow-none login_input_checkbox" id="signupRememberMe">
          <label class="form-check-label" for="signupRememberMe">Remember me</label>
        </div>
        <div class="pt-3 mx-auto text-center">
            <button type="submit" class="btn form-control shadow-none login_submit_btn fw-bold">SIGN UP</button>
        </div>
        <div class="login_signup_text text-center pt-3">OR</div>
        <div class="pt-2 d-flex justify-content-center align-items-center">
            <button type="submit" class="btn shadow-none login_google_btn rounded-circle d-flex justify-content-center align-items-center">
                <img src="assets/img/icons8-google-48.png" width="25px" alt="">
            </button>
        </div>
        <div class="text-center pt-4 login_signup_text">
            Already have an account?
            <a href="login.php">Login</a>
        </div>
    </form>

</main>

<!-- === Bootstrap 5.1.3 JS === -->
<script src="assets/js/bootstrap.bundle.min.js"></script>
<!-- Bootstrap 5.1.3 JS -->
    
<!-- === JS === -->
<script src="assets/js/index.js"></script>
<!-- JS -->

</body>
</html>