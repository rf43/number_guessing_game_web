<?php
/*!
 * Number Guessing Game
 * https://github.com/rf3Studios/number_guessing_game_web
 *
 * Copyright 2014 Rich Friedel
 * Released under the MIT license
 */
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="styles/style_reset.css"/>
    <link rel="stylesheet" href="styles/styles.css"/>
    <script src="http://code.jquery.com/jquery-2.1.1.min.js" type="application/javascript"></script>
    <script src="scripts/game.js" type="application/javascript"></script>

    <title>rf3Studios Number Guessing Game</title>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="Number Guessing Game">
    <meta name="author" content="Rich Friedel">
</head>
<body>
    <div id="game-wrapper">
        <h1>Number Guessing Game!!!</h1>

        <fieldset id="num-entry">
            <legend>Enter the first and last number</legend>
            <label for="start-num">First Number
                <input type="text" name="start-num" id="start-num" class="nums" value="1">
            </label>
            <label for="end-num">Last Number
                <input type="text" name="end-num" id="end-num" class="nums" value="1000">
            </label>
            <label>
                <input type="button" name="submit" id="submit" value="Submit">
            </label>
        </fieldset>
        <div id="num-content">
            <h2 id="num-think"></h2>

            <input type="button" id="ready-btn" value="Click When Ready">

            <h3 id="num-question"></h3>

            <div id="num-quest-btn-wrapper">
                <input type="button" id="yes-btn" value="Yes">
                <input type="button" id="no-btn" value="No">
                <input type="button" id="higher-btn" value="Higher">
                <input type="button" id="lower-btn" value="Lower">
                <input type="button" id="reset-btn" value="Play Again?">
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function () {
            // Start the game
            startGame();
        });
    </script>
</body>
</html>