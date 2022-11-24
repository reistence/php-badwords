
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>PHP Badwords</title>
</head>
<body>
    <div class="container">
        <h1>Censor</h1>
    
        <form action="censored.php" method="get">
            <div>
                <label for="txt">Text:</label>
                <textarea type="text" name="txt" id="txt" placeholder="Insert a text" cols="40" rows="5"></textarea>

            </div>
            

             <div>
                 <label for="word">Word:</label>
                <input type="text" placeholder="Insert the word you'd like to censor" name="word" id="word">

             </div>
            
            <button type="submit">Submit</button>
            <button type="reset">Reset</button>
        </form>
    </div>

    <!-- Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni, molestias repudiandae iste ipsum quaerat nihil rerum veniam temporibus inventore tempore. -->

</body>
</html>