<?php

function connect_db()
{
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db   = "nearstore";

    $conn = mysqli_connect($host, $user, $pass, $db);
    if(mysqli_connect_errno())
    {
        die(mysqli_connect_error());
    }
    return $conn;
}

// Login Check
function isLoggedIn()
{
    $conn = connect_db();
    if(isset($_COOKIE['ADID']))
    {
        $sql = "SELECT `user_id` FROM `login_tokens` WHERE `token`='".sha1($_COOKIE['ADID'])."'";
        $fire = mysqli_query($conn, $sql);

        if(mysqli_num_rows($fire) > 0)
        {
            $sql = mysqli_query($conn, "SELECT `user_id` FROM `login_tokens` WHERE `token`='".sha1($_COOKIE['ADID'])."'");
            $row = mysqli_fetch_assoc($sql);
            $userId = $row['user_id'];

            if(isset($_COOKIE['ADID_']))
            {
                return $userId;
            }
            else
            {
                $cstrong = TRUE;
                $token = bin2hex(openssl_random_pseudo_bytes(64, $cstrong));
                mysqli_query($conn, "INSERT INTO `login_tokens`(`token`, `user_id`) VALUES ('".sha1($token)."', '$userId')");
                mysqli_query($conn, "DELETE FROM `login_tokens` WHERE `token`='".sha1($_COOKIE['ADID'])."'");

                setcookie("ADID", $token, time() + 60 * 60 * 24 * 7, '/', NULL, NULL, TRUE);
                setcookie("ADID_", '1', time() + 60 * 60 * 24 * 3, '/', NULL, NULL, TRUE);
                return $userId;
            }
        }
    }
    return FALSE;
    mysqli_close($conn);
}

?>