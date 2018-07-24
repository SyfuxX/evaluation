<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        
        <title>Document</title>
        
    </head>
    <body>

		<header>
		
			<?= $erros ?>
		
		</header>
		
        <main>

            <h1>Add a new vehicle</h1>

            <form action="./request.php" method="POST">
            
                <label for="make">Make</label>
                <input type="text" name="make" placeholder="Car's make..."><br>

                <label for="model">Model</label>
                <input type="text" name="model" placeholder="Car's model..."><br>

                <label for="year">Year</label>
                <input type="text" name="year" placeholder="Car's year..."><br>

                <label for="color">Color</label>
                <input type="text" name="color" placeholder="Car's color..."><br>

                <input name="btn-submit" type="submit" value="submit">

            </form>

        </main>
        
    </body>
</html>