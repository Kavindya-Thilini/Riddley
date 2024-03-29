<?php

    require "init.php";
    check_login();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">

        <title>Riddley</title>
        <link rel="icon" href="favicon.png" type="image/x-icon">
        <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
        <link rel="stylesheet" href="game.css?v=<?php echo time(); ?>">
    </head>
    <body>
        <div class="container">
         <div id="game" class="justify-center flex-column">
            <div id="hud">
                <div id="hud-item">
                    <p class="hud-prefix">
                        Question
                    </p>
                    <h1 class="hud-main-text" id="questionCounter">
                        1/5
                    </h1>
                  </div>
                <div id="hud-item">
                    <p class="hud-prefix">
                        Score
                    </p>
                    <h1 class="hud-main-text" id="score">
                        0
                    </h1>
                </div>
            </div>
    <h2 id="question">What is the answer to this question?</h2>
    <div class="choice-container">
        <p class="choice-prefix">A</p>
        <p class="choice-text" data-number="1">choice 1</p>
    </div>

    <div class="choice-container">
        <p class="choice-prefix">B</p>
        <p class="choice-text" data-number="2">choice 2</p>
    </div>

    <div class="choice-container">
        <p class="choice-prefix">C</p>
        <p class="choice-text" data-number="3">choice 3</p>
    </div>

    <div class="choice-container">
        <p class="choice-prefix">D</p>
        <p class="choice-text" data-number="4">choice 4</p>
     </div>    
    </div>
   </div>
  <script src='game.js'></script>
 </body>
</html>


<!-- This code is referenced from James Q Quick (Youtube) -->