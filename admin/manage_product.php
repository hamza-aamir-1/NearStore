<?php session_start();
include_once 'assets/classes/DB.php';
include_once 'assets/classes/config.php';

/*
    * Create Product
*/
if (isset($_POST['create_product']))
{
    $prod_title = mysqli_real_escape_string($conn, $_POST['prod_title']);
    $prod_disc = mysqli_real_escape_string($conn, $_POST['prod_disc']);
    $prod_stock = mysqli_real_escape_string($conn, $_POST['prod_stock']);
    $prod_category = mysqli_real_escape_string($conn, $_POST['prod_category']);
    $status = '';

    if($prod_title == '' ||
       $prod_disc == '' ||
       $prod_stock == '' ||
       $prod_category == '')
    {
        $_SESSION['prod_error'] = "All fields required !!";
        redirect('add_product');
    }
    else
    {
        // Check Product already exists or not
        $sql = "SELECT `prod_title` FROM `products` WHERE `prod_title`='$prod_title'";
        $check = mysqli_query($conn, $sql);

        if(mysqli_num_rows($check) > 0)
        {
            $_SESSION['prod_error'] = "Product already exists !!";
            redirect('add_product');
        }
        else
        {
            // Insert Product
            $sql = "INSERT INTO `products`(`prod_title`, `prod_cate`, `prod_disc`, `prod_stock`) VALUES ('$prod_title', '$prod_category', '$prod_disc', '$prod_stock')";
            $fire = mysqli_query($conn, $sql);
            $prod_id = mysqli_insert_id($conn);

            if($fire)
            {
                // Insert Product Images
                foreach($_FILES['prod_image']['name'] as $key => $val)
                {
                    // change image name
                    $image = rand(111111111,999999999).'_'.$_FILES['prod_image']['name'][$key];
                    move_uploaded_file($_FILES['prod_image']['tmp_name'][$key], '../assets/media/product/'.$image);

                    mysqli_query($conn, "INSERT INTO `prod_images`(`prod_id`, `img_name`, `status`) VALUES ('$prod_id', '$image', '$status')");
                }

                // Insert Product Attr
                foreach($_POST['prod_weight'] as $key => $val)
                {
                    $prod_weight = mysqli_real_escape_string($conn, $_POST['prod_weight'][$key]);
                    $prod_qty = mysqli_real_escape_string($conn, $_POST['prod_qty'][$key]);
                    $prod_price = mysqli_real_escape_string($conn, $_POST['prod_price'][$key]);
                    
                    mysqli_query($conn, "INSERT INTO `prod_attr`(`prod_id`, `prod_weight`, `prod_qty`, `prod_price`) VALUES ('$prod_id', '$prod_weight', '$prod_qty', '$prod_price')");
                }
                $_SESSION['prod_success'] = "Product Uploaded Successfully !!";
                redirect('add_product');
            }
            else
            {
                $_SESSION['prod_error'] = "Error to insert product !!";
                redirect('add_product');
            }
        }
    }
    
}
?>