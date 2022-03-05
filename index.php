<html>
    <head>
        <title>Psychic Game</title>
            </head>
    <h1>How To Play:</h1>
        <p>There are 10 stages and your task is correctly guess what number the "crystal ball" is going to predict!</p>
        <p>If you guess a number incorrectly in <u>ANY</u> stage, then you'll need to start back to Stage 1!</p>
        <p>Have Fun!</p>
    <body>
        <br>
        <form action = "index.php" method = "POST">
            <b>Stage 1:</b> I'm thinking of a number between 1 and 5 <input type = "radio" name="Stage1"> <br> <br>
            <b>Stage 2:</b> I'm thinking of a number between 1 and 10 <input type = "radio" name="Stage2"> <br> <br>
            <b>Stage 3:</b> I'm thinking of a number between 1 and 25 <input type = "radio" name="Stage3"> <br> <br>
            <b>Stage 4:</b> I'm thinking of a number between 1 and 50 <input type = "radio" name="Stage4"> <br> <br>
            <b>Stage 5:</b> I'm thinking of a number between 1 and 100 <input type = "radio" name="Stage5"> <br> <br>
            <b>Stage 6:</b> I'm thinking of a number between 1 and 150 <input type = "radio" name="Stage6"> <br> <br>
            <b>Stage 7:</b> I'm thinking of a number between 1 and 300 <input type = "radio" name="Stage7"> <br> <br>
            <b>Stage 8:</b> I'm thinking of a number between 1 and 500 <input type = "radio" name="Stage8"> <br> <br>
            <b>Stage 9:</b> I'm thinking of a number between 1 and 750 <input type = "radio" name="Stage9"> <br> <br>
            <b>Final Stage:</b> I'm thinking of a number between 1 and 1000 <input type = "radio" name="Final"> <br> <br>
            <input type = "submit">
        </form>
        <br>
    <h2>🔮Crystal Ball Predictor🔮</h2>
        <p>This section will generate the "crystal ball's" number!</p>
        <?php
            if(isset($_POST["Stage1"])){
                echo("The number that was chosen was: " . rand(1,5) . "</p>");
            }

            if(isset($_POST["Stage2"])){
                echo("The number that was chosen was: " . rand(1,10) . "</p>");
            }

            if(isset($_POST["Stage3"])){
                echo("The number that was chosen was: " . rand(1,25) . "</p>");
            }

            if(isset($_POST["Stage4"])){
                echo("The number that was chosen was: " . rand(1,50) . "</p>");
            }

            if(isset($_POST["Stage5"])){
                echo("The number that was chosen was: " . rand(1,100) . "</p>");
            }

            if(isset($_POST["Stage6"])){
                echo("The number that was chosen was: " . rand(1,150) . "</p>");
            }

            if(isset($_POST["Stage7"])){
                echo("The number that was chosen was: " . rand(1,300) . "</p>");
            }

            if(isset($_POST["Stage8"])){
                echo("The number that was chosen was: " . rand(1,500) . "</p>");
            }

            if(isset($_POST["Stage9"])){
                echo("The number that was chosen was: " . rand(1,750) . "</p>");
            }

            if(isset($_POST["Final"])){
                echo("The number that was chosen was: " . rand(1,1000) . "</p>");
            }
        
    ?>
    </body>
    </html>