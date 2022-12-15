<?php
    function passwordGenerator() {
        $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789!$%&=?@*";
        $pass = array(); 
        $alphaLength = strlen($alphabet) - 1; 
        for ($i = 0; $i < 8; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }
        return implode($pass); 
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
</head>
<body>
    <form action="" method="get">
        <label for="generator">Inserisci la lunghezza desiderata</label>
        <input type="number" name="generator" id="" required min="3" max="56" placeholder="min 3 max 56">
    </form>
    <h1>Your new password: <?php echo passwordGenerator() ?></h1>
</body>
</html>