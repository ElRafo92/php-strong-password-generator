<?php
    $a = $_GET["pssLength"];
    
    function passwordGenerator() {
        $a = $_GET["pssLength"];
        $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789!$%&=?@*";
        $pass = array(); 
        $alphaLength = strlen($alphabet) - 1; 
        for ($i = 0; $i < $a; $i++) {
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
    <form action="index.php" method="GET">
        <label for="pssLength">Inserisci la lunghezza desiderata</label>
        <input type="number" name="pssLength" id="pssLength" required min="3" max="16" placeholder="3 to 16">
        <button type="submit">SEND</button>
    </form>
    <h1>Your new password: <?php echo passwordGenerator() ?></h1>
</body>
</html>