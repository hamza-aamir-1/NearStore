<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Account</title>
    
    <!-- Bootstrap Link -->
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <!-- Custom Style Link -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Media File Link -->
    <link rel="stylesheet" href="assets/css/media.css">
    <!-- Font Awesome Icon Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

    <div class="container-fluid px-sm-5 pt-md-5 pt-sm-3 my-5">
        <div class="container text-center" style="width:250px;">
            <img src="admin/images/logo.png" class="img-fluid" alt="LOGO">
        </div>
        <div class="container mt-4">
            <div class="row">
                <div class="col-md-6 col-sm-12 offset-md-3 offset-sm-0">
                
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Login</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Create Account</button>
                        </li>
                    </ul>
                    <div class="tab-content pt-4" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Email address</label>
                        </div>
                        <div class="form-floating">
                            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword">Password</label>
                        </div>
                        <div class="mt-3">
                            <button class="btn btn-primary">Login</button>
                        </div>

                        </div>
                        <div class="tab-pane fade pt-2" id="profile" role="tabpanel" aria-labelledby="profile-tab">

                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="fullname" placeholder="Full Name">
                                <label for="fullname">Full Name</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput">Email address</label>
                            </div>
                            <div class="form-floating">
                                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                                <label for="floatingPassword">Password</label>
                            </div>
                            <div class="mt-3">
                                <button class="btn btn-primary">Create Account</button>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap js Link -->
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/popper.js"></script>
    <!-- Jquery js Link -->
    <script src="assets/js/jquery.js"></script>
    <!-- Custom js Link -->
    <script src="assets/js/main.js"></script>

</body>
</html>