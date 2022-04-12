<?php 
include_once 'assets/classes/DB.php';
include_once 'assets/classes/config.php';

if(isset($_POST['update_ord_status']))
{
    $order_id = filter_var($_POST['order_id'], FILTER_SANITIZE_NUMBER_INT);
    $status = filter_var($_POST['status'], FILTER_SANITIZE_STRING);

    $update = mysqli_query($conn, "UPDATE `order_manager` SET `order_status`='$status' WHERE `order_id`='$order_id'");

    redirect('view-order?order_id='.$order_id.'');
}
else
{
    redirect('view-order?order_id='.$order_id.'');
}

?>