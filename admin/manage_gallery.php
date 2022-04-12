<?php session_start();
include_once 'assets/classes/DB.php';
include_once 'assets/classes/config.php';

/*
    * Add Images into gallery
*/
if (isset($_POST['add-gallery']))
{
    $uploadDirectory = "../assets/media/gallery/";
    $validExt = array('jpg', 'jpeg', 'png', 'gif');
    $sqlValues = '';

    foreach($_FILES['image']['tmp_name'] as $keyImg => $valueImg)
    {
        $image = $_FILES['image']['name'][$keyImg];
        $imgTmp = $_FILES['image']['tmp_name'][$keyImg];
        $imgSize = $_FILES['image']['size'][$keyImg];
        $imgType = pathinfo($image, PATHINFO_EXTENSION);

        // New Name For Image
        if($_FILES['image']['name'][$keyImg] !== "")
        {
            $img_nemName = uniqid().".".$imgType;
        }
        else
        {
            $img_nemName = '';
            $_SESSION['gallery_error'] = "Image Required !!";
            redirect('gallery');
        }

        // Checking Image Size
        if($imgSize > 1024000)
        {
            $_SESSION['gallery_error'] = "Image size must be 1 Mb !!";
            redirect('gallery');
        }
        elseif(!empty($image) && !in_array($imgType, $validExt)) 
        {
            $_SESSION['gallery_error'] = "You can use only jpg / jpeg / png images !!";
            redirect('gallery');
        }
        else
        {
            $sqlValues .= "('".$img_nemName."'),";
            
            // Move images into dir
            move_uploaded_file($imgTmp, $uploadDirectory.$img_nemName);
        }
    } // foreach Loop End

    $sql = "INSERT INTO `gallery`(`img_name`) VALUES $sqlValues";

    $sql = rtrim($sql, ",");

    $result = mysqli_query($conn, $sql);

    if($result)
    {
        $_SESSION['gallery_success'] = "Product Uploaded Successfully !!";
        redirect('gallery');
        mysqli_close($conn);
    }
    else
    {
        $_SESSION['gallery_error'] = "Product Not Uploaded !!";
        redirect('gallery');
        mysqli_close($conn);
    }
}


?>