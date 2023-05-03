<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="search.css">
    <title>Tweet</title>
    <h2 id="head" > What's on your mind? Tweet it out!</h2>
    
</head>

<body >

    <div class="container">
        <div class="logo">
            <img src="logo.png" alt="error">
        </div>
    </div>
    <div >
        <form method="post">
           Tweet it out below <input id="id1" type="text" placeholder="tweet" name="text1"  ><br><br>
           

         <input type="submit" value="save">
         
        </form>
     </body>
    </html>
    <?php
    extract($_REQUEST);
    $file=fopen("tweet.txt","w");
    fwrite($file,$text1);
    
    fclose($file);

?>

    