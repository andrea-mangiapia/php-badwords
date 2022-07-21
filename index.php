<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
<!-- Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall'utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza,
dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. -->

<?php
// Creo una variabile con un paragrafo di testo scelto
$myParagraph = 'Le sfide sono ciò che rendono la vita interessante… Superarle è ciò che le dà significato.';

$textLength = strlen($myParagraph);
?>

<div>
    <h3>
        Paragrafo principale:
    </h3>
    <!-- Stampo il paragrafo -->
    <p><?php echo $myParagraph ?></p>
    <div>
        <!-- Stampo la lunghezza del paragrafo -->
        <strong>Lunghezza del paragrafo: </strong> <?php echo $textLength ?> caratteri
    </div>
</div>

<?php 
// Variabile per definire una parola da censurare, viene passata dall'utente tramite parametro GET
$badWord = $_GET['name'];

?>


<div>
    <h3>
        Paragrafo principale con parola censurata:
    </h3>

    <p><?php echo str_replace($badWord, '***', $myParagraph); ?>
    <div>
        <strong>Parola censurata: </strong> "<?php echo $badWord ?>"
    </div>
    <div>
        <strong>Lunghezza del paragrafo: </strong> <?php echo $textLength ?> caratteri
    </div>
</div>



    
</body>
</html>