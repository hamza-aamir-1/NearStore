<?php include "DB.php";

$conn = connect_db();

// Admin Login
if(!empty($_POST['email']) && !empty($_POST['password']))
{
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = $_POST['password'];
    
    $sql = "SELECT * FROM `admin` WHERE `email`='$email'";
    $fire_sql = mysqli_query($conn, $sql);
    if($fire_sql)
    {
        $user = mysqli_fetch_assoc($fire_sql);

        if(password_verify($password, $user['password']))
        {
            if($user['status'] == '1')
            {
                $userId = $user['id'];
                $cstrong = TRUE;
                $token = bin2hex(openssl_random_pseudo_bytes(64, $cstrong));
                mysqli_query($conn, "INSERT INTO `login_tokens`(`token`, `user_id`) VALUES ('".sha1($token)."', '$userId')");

                setcookie("ADID", $token, time() + 60 * 60 * 24 * 7, '/', NULL, NULL, TRUE);
                setcookie("ADID_", '1', time() + 60 * 60 * 24 * 3, '/', NULL, NULL, TRUE);

                echo "success";
            }
            else
            {
                echo "blocked";
            }
        }
        else
        {
            echo "Invalid_info";
        }
    }
    else
    {
        echo "invalid_user";
    }
}
else
{
    echo "empty_fields";
}

// Connection Close
// mysqli_close($conn);
?>