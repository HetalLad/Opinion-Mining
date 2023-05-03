<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="search.css">
    <title>Search Tweets</title>
    <h2 id="head" > Want to know what community thinks?</h2>
    
</head>

<body >

    <div class="container">
        <div class="logo">
            <img src="logo.png" alt="error">
        </div>
    </div>
    <div >
        <form method="post">
           What do you want to search about? <input id="id1" type="text" placeholder="Keywords" name="text1"  ><br><br>
           How many tweets do you want to analyse? <input id="id2" type="number" placeholder="No. Of  Tweets" name="text2" ><br><br>

         <input type="submit" value="save">
         
        </form>
     </body>
    </html>
    <?php
    extract($_REQUEST);
    $file=fopen("search.txt","w");
    fwrite($file,$text1);
    fwrite($file,$text2);
    fclose($file);

?>

    