<!-- === Header === -->
<?php include_once 'header.php'; ?>
<!-- Header -->

<main class="container my-4">

<!-- === Breadcrumb === -->
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.php">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">My Account</li>
    </ol>
</nav>
<!-- Breadcrumb -->

<!-- === Edit Profile === -->
<div class="container my-5">
  <div class="row flex-lg-nowrap">
  
    <div class="col">
      <div class="row">
        <div class="col mb-3">
          <div class="card">
            <div class="card-body">
              <div class="e-profile">
                <div class="row">
                  <div class="col-12 col-sm-auto mb-3">
                    <div class="mx-auto" style="width: 140px;">
                      <div class="d-flex justify-content-center align-items-center rounded" style="height: 140px; background-color: rgb(233, 236, 239);">
                        <span style="color: rgb(166, 168, 170); font: bold 8pt Arial;">140x140</span>
                        <!-- <img src="assets/img/p-0.jpg" width="100%" alt=""> -->
                      </div>
                    </div>
                  </div>
                  <div class="col d-flex flex-column flex-md-row justify-content-between mb-3">
                    <div class="text-center text-md-start mb-2 mb-md-0">
                      <h4 class="pt-sm-2 pb-1 mb-0 text-nowrap">Hamza Aamir</h4>
                      <p class="mb-0">@hamza.a</p>
                      <div class="mt-3">
                        <button class="btn button rounded btn-dark text-light shadow-none" type="button">
                          <i class="fa fa-fw fa-camera"></i>
                          <span>Change Photo</span>
                        </button>
                      </div>
                    </div>
                    <div class="text-center text-sm-end">
                      <div class="text-muted"><small>Joined 21 May 2021</small></div>
                    </div>
                  </div>
                </div>
                <ul class="nav nav-tabs">
                  <li class="nav-item"><a href="#setting" class="active nav-link text-dark">Settings</a></li>
                </ul>
                <div class="tab-content pt-3" id="setting">
                  <div class="tab-pane active text-dark">
                    <form class="form" novalidate="">
                      <div class="row">
                        <div class="col">
                          <div class="row">
                            <div class="col">
                              <div class="form-group mt-3">
                                <label>Full Name</label>
                                <input class="form-control shadow-none" type="text" name="name" placeholder="Hamza Aamir" value="Hamza Aamir">
                              </div>
                            </div>
                            <div class="col">
                              <div class="form-group mt-3">
                                <label>Username</label>
                                <input class="form-control shadow-none" type="text" name="username" placeholder="hamza.a" value="hamza.a">
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col">
                              <div class="form-group mt-3">
                                <label>Email</label>
                                <input class="form-control shadow-none" type="email" placeholder="user@example.com">
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col">
                              <div class="form-group mt-3">
                                <label>Phone</label>
                                <input class="form-control shadow-none" type="tel" placeholder="03010069442">
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col mb-3">
                              <div class="form-group mt-3">
                                <label>Address</label>
                                <textarea class="form-control shadow-none" rows="5" placeholder=""></textarea>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row mt-4">
                        <div class="col-12 col-sm-6 mb-3">
                          <div class="mb-2"><b>Change Password</b></div>
                          <div class="row">
                            <div class="col">
                              <div class="form-group mt-3">
                                <label>Current Password</label>
                                <input class="form-control shadow-none" type="password" placeholder="••••••">
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col">
                              <div class="form-group mt-3">
                                <label>New Password</label>
                                <input class="form-control shadow-none" type="password" placeholder="••••••">
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col">
                              <div class="form-group mt-3">
                                <label>Confirm <span class="d-none d-xl-inline">Password</span></label>
                                <input class="form-control shadow-none" type="password" placeholder="••••••"></div>
                            </div>
                          </div>
                        </div>
                        <div class="col-12 col-sm-5 offset-sm-1 mb-3">
                          <div class="mb-2"><b>Keeping in Touch</b></div>
                          <div class="row">
                            <div class="col">
                              <label>Email Notifications</label>
                              <div class="custom-controls-stacked px-2">
                                <div class="custom-control custom-checkbox">
                                  <input type="checkbox" class="custom-control-input" id="notifications-blog" checked="">
                                  <label class="custom-control-label" for="notifications-blog">Blog posts</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                  <input type="checkbox" class="custom-control-input" id="notifications-news" checked="">
                                  <label class="custom-control-label" for="notifications-news">Newsletter</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                  <input type="checkbox" class="custom-control-input" id="notifications-offers" checked="">
                                  <label class="custom-control-label" for="notifications-offers">Personal Offers</label>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row mt-3">
                        <div class="col d-flex justify-content-end">
                          <button class="btn btn-dark button text-light rounded shadow-none" type="submit">Save Changes</button>
                        </div>
                      </div>
                    </form>
  
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
  
        <div class="col-12 col-md-3 mb-3">
          <div class="card mb-3">
            <div class="card-body">
              <div class="">
                <a href="login.php" style="text-decoration: none;">
                <button class="btn btn-block btn-dark button text-light rounded shadow-none">
                  <i class="fa fa-sign-out"></i>
                  <span>Logout</span>
                </button>
                </a>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-body">
              <h6 class="card-title font-weight-bold">Support</h6>
              <p class="card-text">Get fast, free help from our friendly assistants.</p>
              <a href="contact.php"><button type="button" class="btn btn-dark button text-light rounded shadow-none">Contact Us</button></a>
            </div>
          </div>
        </div>
      </div>
  
    </div>
  </div>
  </div>
<!-- Edit Profile -->

</main>

<!-- === Footer === -->
<?php include_once 'footer.php'; ?>
<!-- Footer -->