<html>
    <head>
        <title>Psychic Game</title>
            </head>
    <body>
        <form action = "index.php" method = "POST">
            Stage 1: I'm thinking of a number between 1 and 5 <input type = "text" name="Stage1"> <br>
            Stage 2: I'm thinking of a number between 1 and 10 <input type = "text" name="Stage2"> <br>
            Stage 3: I'm thinking of a number between 1 and 25 <input type = "text" name="Stage3"> <br>
            Stage 4: I'm thinking of a number between 1 and 50 <input type = "text" name="Stage4"> <br>
            Stage 5: I'm thinking of a number between 1 and 100 <input type = "text" name="Stage5"> <br>
            Stage 6: I'm thinking of a number between 1 and 150 <input type = "text" name="Stage6"> <br>
            Stage 7: I'm thinking of a number between 1 and 300 <input type = "text" name="Stage7"> <br>
            Stage 8: I'm thinking of a number between 1 and 500 <input type = "text" name="Stage8"> <br>
            Stage 9: I'm thinking of a number between 1 and 750 <input type = "text" name="Stage9"> <br>
            Final Stage: I'm thinking of a number between 1 and 1000 <input type = "text" name="Final"> <br>
            <input type = "submit">
        </form>
    <h1>Crystal Number Ball</h1>
        <?php
            if(isset($_POST["Stage1"])){
                echo("The number that was chosen was:" . rand(1,5) . "</p>");
            }

            if(isset($_POST["Stage2"])){
                echo("The number that was chosen was:" . rand(1,10) . "</p>");
            }

            if(isset($_POST["Stage3"])){
                echo("The number that was chosen was:" . rand(1,25) . "</p>");
            }

            if(isset($_POST["Stage4"])){
                echo("The number that was chosen was:" . rand(1,50) . "</p>");
            }

            if(isset($_POST["Stage5"])){
                echo("The number that was chosen was:" . rand(1,100) . "</p>");
            }

            if(isset($_POST["Stage6"])){
                echo("The number that was chosen was:" . rand(1,150) . "</p>");
            }

            if(isset($_POST["Stage7"])){
                echo("The number that was chosen was:" . rand(1,300) . "</p>");
            }

            if(isset($_POST["Stage8"])){
                echo("The number that was chosen was:" . rand(1,500) . "</p>");
            }

            if(isset($_POST["Stage9"])){
                echo("The number that was chosen was:" . rand(1,750) . "</p>");
            }

            if(isset($_POST["Final"])){
                echo("The number that was chosen was:" . rand(1,1000) . "</p>");
            }
        
    ?>
    </body>
    </html>