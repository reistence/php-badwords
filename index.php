<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
    <h1>Censor</h1>


    <form action="censored.php" method="get">
        <label for="txt">Text:</label>
        <input type="text" placeholder="Insert a text" name="txt" id="txt" >
         <br>
         <label for="word">Word:</label>
        <input type="text" placeholder="Insert the word you'd like to censor" name="word" id="word">
        <br>
        <button type="submit">Submit</button>
        <button type="reset">Reset</button>
    </form>

</body>
</html>