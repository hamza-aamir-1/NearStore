<?php include_once 'header.php'; ?>

<section id="products" class="products">
        <div class="container mt-5">
            <div class="row">
                <div class="col-sm-12">
                    <div class="headline text-center my-3">
                        <h2 class="pb-2 position-relative d-inline-block">MY CART</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                
                <div class="container" style="overflow-y:hidden;overflow-x:auto;">
                    <table class="table table-hover align-middle">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Product</th>
                                <th>Title</th>
                                <th>Price</th>
                                <th>Qty</th>
                                <th>Total</th>
                                <th>Remove</th>
                            </tr>
                        </thead>
                        <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>
                                    <img src="assets/media/offers/offer1.jpg" width="50" height="50" class=" float-start" alt="image">
                                    </td>
                                    <td>Lorem ipsum dolor sit amet.</td>
                                    <td>2,000</td>
                                    <td>
                                    <input type="number" min="1" max="10" value="1" style="text-align:center;">
                                    </td>
                                    <td>2,000</td>
                                    <td>
                                    <button type="submit" class="btn btn-outline-danger btn-sm"><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>
                                    <img src="assets/media/offers/offer2.jpg" width="50" height="50" class=" float-start" alt="image">
                                    </td>
                                    <td>Lorem ipsum dolor sit amet.</td>
                                    <td>2,000</td>
                                    <td>
                                    <input type="number" min="1" max="10" value="1" style="text-align:center;">
                                    </td>
                                    <td>2,000</td>
                                    <td>
                                    <button type="submit" class="btn btn-outline-danger btn-sm"><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>

                                <tr>
                                    <td>3</td>
                                    <td>
                                    <img src="assets/media/offers/offer3.jpg" width="50" height="50" class=" float-start" alt="image">
                                    </td>
                                    <td>Lorem ipsum dolor sit amet.</td>
                                    <td>2,000</td>
                                    <td>
                                    <input type="number" min="1" max="10" value="1" style="text-align:center;">
                                    </td>
                                    <td>2,000</td>
                                    <td>
                                    <button type="submit" class="btn btn-outline-danger btn-sm"><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                        </tbody>
                    </table>
                </div>

            </div>

        </div>
</section>
<?php include_once 'footer.php'; ?>