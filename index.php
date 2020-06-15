 <!-- esempio saluto terminale <?php echo 'ciao ' . $argv[1] . ' ' . $argv[2] ?>  -->

<?php 
    $sentence = 'Benvenuto nel lato oscuro! Sono Darth Vader e sono il tuo parolacciadacensurare padre!';
    $badword = $_GET['badword'];
    $censure = '***';
    $censured_sentence = str_replace($badword , $censure, $sentence);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>DARK SIDE</title>
        <link rel="icon" href="img/darthvaderface.ico">
        <link rel="stylesheet" href="style.css">
        <link href="https://fonts.googleapis.com/css2?family=Metal+Mania&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class='container'>
            <div>
                <img src="img/darthvader.png" alt="Darth Vader Cartoon">
            </div>
            <div>
            <p> <?php echo $censured_sentence ?> </p>
            <p> Ti ho degnato di ben <?php echo strlen($sentence) ?> caratteri! </p> 
            </div>

        </div>
    </body>
</html>