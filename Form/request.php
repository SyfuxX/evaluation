<?php

    $ok = TRUE;

    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {

        if(empty($_POST['make']) || strlen($_POST['make']) < 2)
        {
            $ok = FALSE;
            echo 'You need at least 2 characters for your car\'s make<br>';
        }

        if(empty($_POST['model']) || strlen($_POST['model']) < 3)
        {
            $ok = FALSE;
            echo 'You need at least 3 characters for your car\'s model<br>';
        }

        if(empty($_POST['year']) || strlen($_POST['year']) == 4 && is_numeric($_POST['year']))
        {
            $ok = FALSE;
            echo 'Please enter a valid year for your car<br>';
        }

        if(empty($_POST['color']) || strlen($_POST['color']) < 3)
        {
            $ok = FALSE;
            echo 'You need at least 3 characters for your car\'s make<br>';
        }

        if($ok)
        {
            echo 'You successfully added a vehicle !<br>';
        }
        else 
        {
            http_response_code(400);
            echo 'You did it wrong !<br>';
        }

    }
    else
    {

        http_response_code(405);
        $ok = FALSE;
        echo 'Something went wrong...<br>';

    }

?>