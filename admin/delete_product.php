<?php session_start();
include_once 'assets/classes/DB.php';
include_once 'assets/classes/config.php';

if(isset($_POST['del_prod']))
{
    $prod_id = filter_var($_POST['prod_id'], FILTER_SANITIZE_NUMBER_INT);

    $sql = "DELETE FROM `products` WHERE `id`='$prod_id'";
    $fire = mysqli_query($conn, $sql);

    if($fire)
    {
        // Delete Product Attr
        $sql = "DELETE FROM `prod_attr` WHERE `prod_id`='$prod_id'";
        $fire = mysqli_query($conn, $sql);

        if($fire)
        {
            // Delete Product Images
            $sql = "SELECT `img_name` FROM `prod_images` WHERE `prod_id`='$prod_id'";
            $fire = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_assoc($fire))
            {
                unlink("../assets/media/product/".$row['img_name']."");
                $sql = "DELETE FROM `prod_images` WHERE `prod_id`='$prod_id'";
                mysqli_query($conn, $sql);
            }
        }
        else
        {
            die("Error To delete product attr");
        }
    }
    else
    {
        die("Error To delete product");
    }
}
else
{
    redirect('products');
}

?>