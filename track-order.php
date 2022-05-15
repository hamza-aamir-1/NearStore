<!-- === Header === -->
<?php include_once 'header.php'; ?>
<!-- Header -->

<main class="container my-4">

    <!-- === Breadcrumb === -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="old-index.html">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Track Order</li>
        </ol>
    </nav>
    <!-- Breadcrumb -->

    <!-- === Track Orders Heading === -->
    <section class="">
        <div class="track_order_heading">
            Track Orders
        </div>
        <div class="track_order_subheading">
            (Click on any item to see details)
        </div>
    </section>
    <!-- Track Orders Heading -->

    <!-- === Track Orders Table === -->
    <section class="my-4 table-responsive">
        <table class="table table-bordered align-middle table-hover">
            <thead>
                <tr>
                    <td colspan="4">
                        <div class="d-md-flex align-items-center justify-content-between">
                            <div>
                                <input type="search" class="track_order_table_search" placeholder="Search..." name="" id="">
                            </div>
                            <div class="d-flex justify-content-md-end justify-content-between mt-md-0 mt-3">
                                <div class="pe-3">
                                    <select name="" id="" class="track_order_table_sort">
                                        <option value="">Sort by (default):</option>
                                        <option value="">Name -Ascending</option>
                                        <option value="">Name -Descending</option>
                                        <option value="">Track no. -Ascending</option>
                                        <option value="">Track no. -Descending</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="" class="pe-2 track_order_table_sort_label">Show:</label>
                                    <select name="" id="" class="track_order_table_sort">
                                        <option value="">All</option>
                                        <option value="">Ordered</option>
                                        <option value="">Shipped</option>
                                        <option value="">Delivered</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr class="track_order_table_row">
                    <td class="fw-bolder track_order_table_item">Product</td>
                    <td class="fw-bolder track_order_table_item">Qty</td>
                    <td class="fw-bolder track_order_table_item">Tracking Number</td>
                    <td class="fw-bolder track_order_table_item">Tracking Status</td>
                </tr>
            </thead>
            <tr class="track_order_table_row" data-bs-toggle="collapse" data-bs-target="#track_order_row_collapse" aria-expanded="false" aria-controls="track_order_row_collapse">
                <td class="track_order_table_item">Brown Long Shoes</td>
                <td class="track_order_table_item">2</td>
                <td class="track_order_table_item">FSD1357924680</td>
                <td class="track_order_table_item">Ordered</td>
            </tr>
            <tr class="track_order_table_row">
                <td class="track_order_table_item">Fashion Long Sleve Spring Shirt</td>
                <td class="track_order_table_item">13</td>
                <td class="track_order_table_item">FSD1357924680</td>
                <td class="track_order_table_item">Shipped</td>
            </tr>
            <tr class="track_order_table_row">
                <td class="track_order_table_item">Blue High Hill</td>
                <td class="track_order_table_item">1</td>
                <td class="track_order_table_item">FSD2468135790</td>
                <td class="track_order_table_item">Delivered</td>
            </tr>
        </table>
    </section>
    <!-- Track Orders Table -->

    <!-- === Track Order Details === -->
    <section class="my-5" class="collapse" id="track_order_row_collapse">
            <div class="track_order_heading">
                #FSD1357924680:
            </div>
            <div class="row mt-5">
                <div class="col-12">
                    <div class="d-flex justify-content-between">
                        <div class="order_tracking_graph order_tracking_completed">
                            <span class="order_tracking_is_complete"></span>
                            <p>Ordered<br><span>Sun, Apr 24</span></p>
                        </div>
                        <div class="order_tracking_graph order_tracking_completed">
                            <span class="order_tracking_is_complete"></span>
                            <p>Shipped<br><span>Mon, Apr 25</span></p>
                        </div>
                        <div class="order_tracking_graph">
                            <span class="order_tracking_is_complete"></span>
                            <p>Delivered<br><span>Thu, Apr 28</span></p>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- Track Order Details -->

</main>

<!-- === Footer === -->
<?php include_once 'footer.php'; ?>
<!-- Footer -->