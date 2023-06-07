<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
$testo = $_GET["testoScritto"];
$testo2 = str_replace($testo, "***", $testo)
?>

<p>Lunghezza: <?php echo strlen($testo) ?> </p>
<p>Testo scritto: <?php echo $testo; ?> </p>
<p>Testo scritto censurato: <?php echo $testo2; ?> </p>




</body>
</html>