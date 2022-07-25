<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/ns-logo.png" type="image/x-icon">
    <title>NS Reset Password</title>

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
            Reset password
        </div>
    </div>

    <!-- Reset Form -->
    <form class="mt-4 pb-5 text-white">
        <div class="mb-3">
            <label for="resetInputEmail1" class="form-label fw-bold">Email address</label>
            <input type="email" class="form-control shadow-none login_input" id="resetInputEmail1" aria-describedby="emailHelp" value="user_email_address@gmail.com" disabled>
        </div>
        <div class="mb-3 show_hide_password_box reset_password_box">
          <label for="resetInputPassword1" class="form-label fw-bold">New Password</label>
          <input type="password" placeholder="********" class="form-control shadow-none login_input" id="resetInputPassword1" required>
          <span><i class="bi bi-eye-slash" id="eyeResetInputPassword1"></i></span>
        </div>
        <div class="mb-3 show_hide_password_box reset_password_box">
            <label for="resetInputPassword2" class="form-label fw-bold">Confirm Password</label>
            <input type="password" placeholder="********" class="form-control shadow-none login_input" id="resetInputPassword2" required>
            <span><i class="bi bi-eye-slash" id="eyeResetInputPassword2"></i></span>
        </div>
        <div class="pt-3 mx-auto text-center">
            <button type="submit" class="btn form-control shadow-none login_submit_btn fw-bold">Reset Password</button>
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