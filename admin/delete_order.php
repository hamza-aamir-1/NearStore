<?php 
include_once 'assets/classes/DB.php';
include_once 'assets/classes/config.php';

if(isset($_POST['del_order']))
{
    $order_id = filter_var($_POST['order_id'], FILTER_SANITIZE_NUMBER_INT);

    $sql = "DELETE FROM `order_manager` WHERE `order_id`='$order_id'";
    $fire = mysqli_query($conn, $sql);

    if($fire)
    {
        // Delete order items
        $sql = "SELECT `order_id` FROM `user_orders` WHERE `order_id`='$order_id'";
        $fire = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_assoc($fire))
        {
            $sql = "DELETE FROM `user_orders` WHERE `order_id`='$order_id'";
            mysqli_query($conn, $sql);
        }
        redirect('orders');
    }
    else
    {
        die("Error To delete product");
    }
}
else
{
    redirect('orders');
}

?>