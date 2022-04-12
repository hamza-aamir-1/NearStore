<?php include_once 'header.php'; ?>

<div class="container-fluid px-sm-5 my-5">
    
    <div class="container">

        <div class="row">
            <div class="col-md-8 col-sm-12 offset-md-2 offset-sm-0">
                <h3>Contact Us</h3>
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="f_name" placeholder="First Name" autocomplete="off">
                            <label for="f_name">First Name</label>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="l_name" placeholder="Last Name" autocomplete="off">
                            <label for="l_name">Last Name</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="email" placeholder="name@example.com" autocomplete="off">
                            <label for="email">Email address</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                            <label for="floatingTextarea2">Write your message ...</label>
                        </div>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-md-6 col-sm-12 d-grid gap-">
                        <button class="btn btn-primary ">Submit</button>
                    </div>
                </div>

            </div>
        </div>

    </div>

</div>

<?php include_once 'footer.php'; ?>