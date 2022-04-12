<?php include_once 'DB.php';

$conn = connect_db();

function redirect($link){
    ?>
    <script>
        window.location.href='<?= $link; ?>';
    </script>
    <?php
    die();
}


function input_received($data)
{
    if(is_array($data))
    {
        foreach($data as $input)
        {
            if($input == '' || $input == NULL)
            {
                return FALSE;
            }
        }
    }
    return TRUE;
}

?>