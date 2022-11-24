<?php
    $user_txt = $_GET['txt'];
    // var_dump($user_txt);
    $user_word = $_GET['word'];
    $censored_txt = str_ireplace($user_word, '***', $user_txt );
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">

    <title>Censored Words</title>
</head>
<body>
<div class="container">

    <h1>Censored</h1>

    <div class="result-container">

        
        <h3>The original Text was:</h3>
        <p><?php echo $user_txt ?></p>
        <p>The original text is <?php echo strlen($user_txt) ?> words long</p>
        
        <h3>The censored one is:</h3>
        <p> <?php echo $censored_txt ?> </p>
        <p>The censored text is <?php echo strlen($user_txt) ?> words long </p>

    </div>
</div>
    
</body>
</html>