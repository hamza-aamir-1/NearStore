<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Near Store | www.nearstore.com</title>

    <!-- === Font Awesome CDN === -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
      integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <!-- Font Awesome CDN -->

    <!-- === Bootstrap Icons === -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css"
    />
    <!-- Bootstrap Icons -->

    <!-- === Bootstrap 5.1.3 CSS === -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <!-- Bootstrap CSS -->

    <!-- === Owl Carousel CSS === -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <!-- Owl Carousel CSS -->

    <!-- === CSS === -->
    <link rel="stylesheet" href="assets/css/style.css" />
    <!-- CSS -->
  </head>
  <body class="bg-light">

<main class="container my-5">
<form action="">
<div class="row g-4">

    <!-- === Checkout Info Box === -->
    <section class="col-lg-7">
        <div class="">

            <!-- === Personal Information === -->
            <section>
            <a class="text-decoration-none" data-bs-toggle="collapse" href="#personalInformation" role="button" aria-expanded="false" aria-controls="personalInformation">
            <header class="checkout_box_border d-flex align-items-center py-3 px-4">
                <div class="checkout_info_header_number me-2">1</div>
                <div class="checkout_info_header_heading">
                    Personal Information
                </div>
            </header>
            </a>
            <div class="collapse" id="personalInformation">
            <main class="d-flex py-3 px-4 checkout_info_border">
                    <table class="">

                        <!-- Gender -->
                        <tr>
                            <td class="checkout_price_box_text checkout_table_td">Social title</td>
                            <td class="d-flex checkout_table_td">
                                <div class="me-3">
                                    <input type="radio" name="checkout_gender" id="male">
                                    <label for="male" class="checkout_price_box_text">Mr.</label>
                                </div>
                                <div>
                                    <input type="radio" name="checkout_gender" id="female">
                                    <label for="female" class="checkout_price_box_text">Mrs.</label>
                                </div>
                            </td>
                        </tr>

                        <!-- First Name -->
                        <tr>
                            <td class="checkout_price_box_text checkout_table_td">First name</td>
                            <td class="checkout_table_td">
                                <div>
                                    <input class="checkout_input" type="text" name="" id="">
                                </div>
                                <div class="checkout_price_box_text text-secondary text">
                                    <small>Only letters and the dot (.) character, followed by a space, are allowed.</small>
                                </div>
                            </td>
                        </tr>

                        <!-- Last Name -->
                        <tr>
                            <td class="checkout_price_box_text checkout_table_td">Last name</td>
                            <td class="checkout_table_td">
                                <div>
                                    <input class="checkout_input" type="text" name="" id="">
                                </div>
                                <div class="checkout_price_box_text text-secondary">
                                    <small>Only letters and the dot (.) character, followed by a space, are allowed.</small>
                                </div>
                            </td>
                        </tr>

                        <!-- Email -->
                        <tr>
                            <td class="checkout_price_box_text checkout_table_td">Email</td>
                            <td class="checkout_table_td">
                                <input class="checkout_input" type="email" name="" id="">
                            </td>
                        </tr>

                        <!-- Create Account Text -->
                        <!-- <tr>
                            <td class="checkout_table_td" colspan="2">
                                <div class="checkout_price_box_text fw-bold">
                                    Create an account <span class="fw-light">(optional)</span>
                                </div>
                                <div class="checkout_price_box_text text-secondary">
                                    And save time on your next order!
                                </div>
                            </td>
                        </tr> -->

                        <!-- Password -->
                        <!-- <tr>
                            <td class="checkout_price_box_text checkout_table_td">Password</td>
                            <td class="checkout_table_td">
                                <input class="checkout_input" type="password" name="" id="">
                                <button class="checkout_password_btn btn shadow-none">Show</button>
                            </td>
                        </tr> -->

                        <!-- Birth Date -->
                        <!-- <tr>
                            <td class="checkout_price_box_text checkout_table_td">Birthdate</td>
                            <td class="checkout_table_td">
                                <div>
                                    <input type="date" name="" id="">
                                </div>
                                <div class="checkout_price_box_text text-secondary">
                                    (E.g.: 05/31/1970)
                                </div>
                            </td>
                        </tr> -->

                        <tr>
                            <td></td>
                            <td class="checkout_table_td">
                                <div>
                                    <input class="me-2" type="checkbox" name="" id="checkout_checkbox_data_privacy">
                                    <label for="checkout_checkbox_data_privacy" class="checkout_price_box_text">Customer data privacy</label>
                                </div>
                                <div class="checkout_price_box_text text-secondary">
                                    <small>The personal data you provide is used to answer queries, process orders or allow access to specific information. You have the right to modify and delete all the personal information found in the "My Account" page.</small>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td></td>
                            <td class="checkout_table_td">
                                <div>
                                    <input class="me-2" type="checkbox" name="" id="checkout_checkbox_newletter">
                                    <label for="checkout_checkbox_newletter" class="checkout_price_box_text">Sign up for our newsletter</label>
                                </div>
                                <div class="checkout_price_box_text text-secondary">
                                    <small>You may unsubscribe at any moment. For that purpose, please find our contact info in the legal notice.</small>
                                </div>
                            </td>
                        </tr>
                        
                    </table>
            </main>
            </div>
            </section>

            <!-- === Addresses -->
            <section class="mt-4">
                <a class="text-decoration-none" data-bs-toggle="collapse" href="#addresses" role="button" aria-expanded="false" aria-controls="addresses">
                <header class="checkout_box_border d-flex align-items-center py-3 px-4">
                    <div class="checkout_info_header_number me-2">2</div>
                    <div class="checkout_info_header_heading">
                        Addresses
                    </div>
                </header>
                </a>
                <div class="collapse" id="addresses">
                    <main class="d-flex py-3 px-4 checkout_info_border">
                            <table class="">
        
                                <!-- Address -->
                                <tr>
                                    <td class="checkout_price_box_text checkout_table_td">Address</td>
                                    <td class="checkout_table_td">
                                        <input class="checkout_input" type="text" name="" id="">
                                    </td>
                                </tr>

                                <!-- Phone Number -->
                                <tr>
                                    <td class="checkout_price_box_text checkout_table_td">Phone Number</td>
                                    <td class="checkout_table_td">
                                        <input class="checkout_input" type="tel" name="" id="">
                                    </td>
                                </tr>
        
                                <!-- City -->
                                <tr>
                                    <td class="checkout_price_box_text checkout_table_td">City</td>
                                    <td class="checkout_table_td">
                                        <input class="checkout_input" type="text" name="" id="">
                                    </td>
                                </tr>
        
                                <!-- Zip/Postal Code -->
                                <tr>
                                    <td class="checkout_price_box_text checkout_table_td">Zip/Postal Code</td>
                                    <td class="checkout_table_td">
                                        <input class="checkout_input" type="number" name="" id="">
                                    </td>
                                </tr>

                                <!-- Province -->
                                <tr>
                                    <td class="checkout_price_box_text checkout_table_td">Province</td>
                                    <td class="checkout_table_td">
                                        <select name="" id="" class="checkout_input">
                                            <option value="">Punjab</option>
                                            <option value="">Sindh</option>
                                        </select>
                                    </td>
                                </tr>

                                <!-- Country -->
                                <tr>
                                    <td class="checkout_price_box_text checkout_table_td">Country</td>
                                    <td class="checkout_table_td">
                                        <input class="checkout_input" type="text" value="Pakistan" name="" id="" disabled>
                                    </td>
                                </tr>
                                
                            </table>
                    </main>
                </div>
            </section>

            <!-- === Shipping Method === -->
            <section class="mt-4">
                <a class="text-decoration-none" data-bs-toggle="collapse" href="#shippingMethod" role="button" aria-expanded="false" aria-controls="shippingMethod">
                <header class="checkout_box_border d-flex align-items-center py-3 px-4">
                    <div class="checkout_info_header_number me-2">3</div>
                    <div class="checkout_info_header_heading">
                        Shipping Method
                    </div>
                </header>
                </a>
                <div class="collapse" id="shippingMethod">
                    <main class="py-3 px-4 checkout_info_border">
                        <div>
                            <input type="radio" name="shippingMethod" id="freeCarrier" class="me-2">
                            <label for="freeCarrier" class="checkout_price_box_text">Free Carrier (Delivery next week! - Free)</label>
                        </div>
                        <div class="my-2">
                            <input type="radio" name="shippingMethod" id="megaExpress" class="me-2">
                            <label for="megaExpress" class="checkout_price_box_text">Mega Express (Pick up in-store - $7.00 tax excl.)</label>
                        </div>
                        <div class="checkout_price_box_text">
                            If you would like to add a comment about your order, please write it in the field below.
                        </div>
                        <div class="mt-2">
                            <textarea name="" id="" cols="30" rows="10" class="form-control shadow-none checkout_input"></textarea>
                        </div>
                    </main>
                </div>
            </section>

            <!-- === Payment === -->
            <section class="mt-4">
                <a class="text-decoration-none" data-bs-toggle="collapse" href="#payment" role="button" aria-expanded="false" aria-controls="payment">
                <header class="checkout_box_border d-flex align-items-center py-3 px-4">
                    <div class="checkout_info_header_number me-2">4</div>
                    <div class="checkout_info_header_heading">
                        Payment
                    </div>
                </header>
                </a>
                <div class="collapse" id="payment">
                    <main class="py-3 px-4 checkout_info_border">
                        <div>
                            <input type="radio" name="paymentRadio" id="paymentCod" class="me-2">
                            <label for="paymentCod" class="checkout_price_box_text">Cash on Delivery</label>
                        </div>
                        <div class="my-2">
                            <input type="radio" name="paymentRadio" id="paymentBank" class="me-2">
                            <label for="paymentBank" class="checkout_price_box_text">Pay by Bank Wire</label>
                        </div>
                        <div>
                            <input class="me-2" type="checkbox" name="" id="checkout_checkbox_terms_service">
                            <label for="checkout_checkbox_terms_service" class="checkout_price_box_text">
                                I agree to the 
                                <a href="#" class="checkout_price_box_text">terms of service</a>
                                and will adhere to them unconditionally.
                            </label>
                        </div>
                    </main>
                </div>
            </section>

        </div>
    </section>
    <!-- Checkout Info Box -->

    <!-- === Checkout Price Box -->
    <section class="col-lg-5">
    <div>
        <header class="checkout_box_border d-flex align-items-center py-3 px-4">
            <div class="checkout_info_header_number me-2">5</div>
            <div class="checkout_info_header_heading">
                Your Order
            </div>
        </header>
        <main class="checkout_info_border py-3 px-4">
            <div class="checkout_price_box_text py-1">
                2 item
            </div>
            <div class="py-1">
                <a class="checkout_price_box_text" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                    show details
                </a>
                <div class="collapse py-2" id="collapseExample">

                    <!-- Item Details -->
                    <div class="d-flex align-items-center py-2">
                        <div class="pe-2">
                            <a href="#">
                                <img src="old-assets/img/p-1.jpg" width="50px" alt="">
                            </a>
                        </div>
                        <div class="checkout_price_box_text">
                            <div class="d-flex align-items-center">
                                <div>3</div>
                                <div class="px-1"> x </div>
                                <div>
                                    <a href="#" class="checkout_price_box_text text-decoration-none">Infinix Note Series Smartphone</a>
                                </div>
                            </div>
                            <div>
                                Rs. 27050
                            </div>
                        </div>
                    </div>

                    <!-- Item Details -->
                    <div class="d-flex align-items-center py-2">
                        <div class="pe-2">
                            <a href="#">
                                <img src="old-assets/img/p-3.jpg" width="50px" alt="">
                            </a>
                        </div>
                        <div class="checkout_price_box_text">
                            <div class="d-flex align-items-center">
                                <div>1</div>
                                <div class="px-1"> x </div>
                                <div>
                                    <a href="#" class="checkout_price_box_text text-decoration-none">Galaxy Note Series Smartphone</a>
                                </div>
                            </div>
                            <div>
                                Rs. 13750
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="d-flex justify-content-between checkout_price_box_text py-1">
                <div>
                    Subtotal
                </div>
                <div>
                    Rs. 675
                </div>
            </div>
            <div class="d-flex justify-content-between checkout_price_box_text py-1">
                <div>
                    Shipping
                </div>
                <div>
                    Rs. 105
                </div>
            </div>
            <div class="d-flex justify-content-between checkout_price_box_text py-1">
                <div>
                    Total (tax excl.)
                </div>
                <div>
                    Rs. 780
                </div>
            </div>
            <div class="d-flex justify-content-between checkout_price_box_total py-1">
                <div>
                    Total (tax incl.)
                </div>
                <div>
                    Rs. 780
                </div>
            </div>
            <div class="d-flex justify-content-between checkout_price_box_text py-1">
                <div>
                    Taxes:
                </div>
                <div>
                    Rs. 0
                </div>
            </div>
            <div class="py-1 d-flex">
                <!-- <a href="#" class="checkout_price_box_text">
                    Have a promo code?
                </a> -->
                <input type="number" placeholder="Promo Code" class="form-control checkout_input shadow-none rounded-0">
                <button class="checkout_promocode_btn">Add</button>
            </div>
        </main>

        <!-- Place Order Button -->
        <div class="mt-4">
            <button type="submit" class="checkout_place_order_btn form-control shadow-none">Place Order</button>
        </div>

    </div>
    </section>
    <!-- Checkout Price Box -->

</div>
</form>
</main>

<!-- === Bootstrap 5.1.3 JS === -->
<script src="assets/js/bootstrap.bundle.min.js"></script>
    <!-- Bootstrap JS -->

    <!-- === jQuery === -->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <!-- jQuery -->

    <!-- === Owl Carousel JS === -->
    <script src="assets/js/owl.carousel.min.js"></script>
    <!-- Owl Carousel JS -->

    <!-- === JS === -->
    <script src="assets/js/index.js"></script>
    <!-- JS -->
  </body>
</html>