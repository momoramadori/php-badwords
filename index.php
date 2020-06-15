 <!-- esempio saluto terminale <?php echo 'ciao ' . $argv[1] . ' ' . $argv[2] ?>  -->

<?php 
    $sentence = 'Benvenuto nel lato oscuro! Sono Darth Vader e sono il tuo fottuto padre!';
    $badword = $_GET['badword'];
    $badword_center = substr($badword,1,4);
    $censure = '***';
    $censured_sentence = str_replace($badword_center , $censure, $sentence);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p> <?php echo $censured_sentence ?> </p>
    <p> <?php echo strlen($sentence) ?> </p> 
</body>
</html>