
<?php
    session_start();
    if(!isset($_POST['frase']) || !isset($_POST['valore'])){
        header ("Location: frase.html");
    }
    include "controllo_dati_sessione.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $frase=$_POST['frase'];
        $valore=$_POST['valore'];
        echo "<p><b> hai inserito la frase :</b> <i>$frase</i><br>la frase ha un valore di importanza pari a $valore</p>
        <br><br><a href='frase.html'>inserisci una nuova frase</a>";
        $_SESSION['totale_caratteri_inviati']+=strlen($frase);
        $_SESSION['totale_parole_inviate']+=str_word_count($frase);
        if($valore==4){
            array_push($_SESSION['frasi_massima_importanza'],$frase);
        }

    ?>
</body>
</html>

