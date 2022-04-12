<?php session_start();
include_once 'assets/classes/DB.php';
include_once 'assets/classes/config.php';

/*
    * Add PDF files
*/
if (isset($_POST['add-download']))
{
    $uploadDirectory = "../assets/media/downloads/";
    $validExt = array('pdf');
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
            $_SESSION['download_error'] = "PDF Required !!";
            redirect('downloads');
        }

        // Checking Image Size
        if($imgSize > 1024000)
        {
            $_SESSION['download_error'] = "PDF file size must be 1 Mb !!";
            redirect('downloads');
        }
        elseif(!empty($image) && !in_array($imgType, $validExt)) 
        {
            $_SESSION['download_error'] = "You can upload only pdf files !!";
            redirect('downloads');
        }
        else
        {
            $sqlValues .= "('".$_POST['file_title']."', '".$img_nemName."'),";
            
            // Move images into dir
            move_uploaded_file($imgTmp, $uploadDirectory.$img_nemName);
        }
    } // foreach Loop End

    if(!empty($_POST['file_title']))
    {
        $sql = "INSERT INTO `download`(`file_title`, `file_name`) VALUES $sqlValues";

        $sql = rtrim($sql, ",");

        $result = mysqli_query($conn, $sql);

        if($result)
        {
            $_SESSION['download_success'] = "File Uploaded Successfully !!";
            redirect('downloads');
            mysqli_close($conn);
        }
        else
        {
            $_SESSION['download_error'] = "File Not Uploaded !!";
            redirect('downloads');
            mysqli_close($conn);
        }
    }
    else
    {
        $_SESSION['download_error'] = "All fields required !!";
        redirect('downloads');
        mysqli_close($conn);
    }
}


?>