<?php session_start();
include_once 'assets/classes/DB.php';
include_once 'assets/classes/config.php';

if(isset($_POST['update_stock']))
{
    $prod_id = filter_var($_POST['prod_id'], FILTER_SANITIZE_NUMBER_INT);
    $stock = filter_var($_POST['stock'], FILTER_SANITIZE_STRING);

    $update = mysqli_query($conn, "UPDATE `products` SET `prod_stock`='$stock' WHERE `id`='$prod_id'");

    redirect('view-product?prod_id='.$prod_id.'');
}
else
{
    redirect('view-product?prod_id='.$prod_id.'');
}

?>