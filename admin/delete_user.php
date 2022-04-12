<?php 
include_once 'assets/classes/DB.php';
include_once 'assets/classes/config.php';

if(isset($_POST['del_user']))
{
    $user_id = filter_var($_POST['user_id'], FILTER_SANITIZE_NUMBER_INT);

    $del = mysqli_query($conn, "DELETE FROM `users` WHERE `id`='$user_id'");
    if($del)
    {
        redirect('users');
    }
    else
    {
        die("Error to delete user");
    }
}
else
{
    redirect('users');
}

?>