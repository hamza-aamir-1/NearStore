<?php session_start();
include_once 'assets/classes/DB.php';
include_once 'assets/classes/config.php';

if(isset($_POST['set_featured']))
{
    $img_id = filter_var($_POST['img_id'], FILTER_SANITIZE_NUMBER_INT);
    $prod_id = filter_var($_POST['prod_id'], FILTER_SANITIZE_NUMBER_INT);

    $sql = "UPDATE `prod_images` SET `status`='featured' WHERE `id`=$img_id;";
    $sql .= "UPDATE `prod_images` SET `status`='' WHERE `prod_id`=$prod_id AND NOT `id`=$img_id";

    mysqli_multi_query($conn, $sql);
    redirect('view-product?prod_id='.$prod_id.'');
}
else
{
    redirect('view-product?prod_id='.$prod_id.'');
}

?>