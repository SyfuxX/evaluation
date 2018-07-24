<?php

    require_once './Cat/Cat.php';

    function getInfo()
    {

        try 
        {
            echo '<pre>';
                var_dump(Cat\Cat::fromArray($_POST));
            echo '</pre>';
        }
        catch (RuntimeException $e)
        {
            echo 'An error occured !';
            exit();
        }

    }

    if(isset($_POST) && !empty($_POST))
    {

        /* echo '<pre>';
            print_r($_POST);
        echo '<pre>'; */

        getInfo();

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

</head>
<body>

    <main>
    
        <form action="" method="POST">
        
            <label for="firstname">Firstname:</label>
            <input type="text" name="firstname" placeholder=""><br>

            <label for="age">Age:</label>
            <input type="number" name="age" placeholder=""><br>

            <label for="color">Color:</label>
            <input type="text" name="color" placeholder=""><br>

            <label for="sex">Sex:</label>
            <select name="sex">
                <option hidden disabled selected>Male or female?</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select><br>

            <label for="race">Race:</label>
            <input type="text" name="race" placeholder=""><br>

            <input type="submit" value="submit">
        
        </form>
    
    </main>
    
</body>
</html>