<!DOCTYPE html>
<html>
<head>
    <title>013fe9a1 Guessing Game</title>
</head>
<body>
    <h1>Guessing Game</h1>

    <?php
    $correct_number = 69;
    $message = false;

    if (!isset($_GET['guess'])) {
        $message = "Missing guess parameter";
    } else {
        $guess = $_GET['guess'];
        if (strlen($guess) < 1) {
            $message = "Your guess is too short";
        } elseif (!is_numeric($guess)) {
            $message = "Your guess is not a number";
        } else {
            $guess = (int)$guess;
            if ($guess < $correct_number) {
                $message = "Your guess is too low";
            } elseif ($guess > $correct_number) {
                $message = "Your guess is too high";
            } else {
                $message = "Congratulations - You are right";
            }
        }
    }

    // In ra thông báo nếu có
    if ($message !== false) {
        echo "<p>$message</p>";
    }
    ?>

    <form method="get">
        <p><label for="guess">Enter your guess: </label>
        <input type="text" name="guess" id="guess" size="40" /></p>
        <input type="submit" value="Submit" />
    </form>
</body>
</html>