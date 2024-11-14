<?php
    session_start();
    include 'controllo_dati_sessione.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        
        if( count($_SESSION['frasi_massima_importanza'])>0 ){
            echo "<h3>frasi di massima importanza:</h3><ul>";
                for($i=0; $i<count($_SESSION['frasi_massima_importanza']); $i++){
                echo "<li>".$_SESSION['frasi_massima_importanza'][$i]."</li>";
            }
        }
        echo "</ul><br>";
        echo "<table><tr><th>totale di parole inserite</th><th>totale di caratteri inseriti</th><tr>
        <td>".$_SESSION['totale_parole_inviate']."</td><td>".$_SESSION['totale_caratteri_inviati']."</td></tr></table>
        <br><br><a href='frase.html'>inserisci una nuova frase</a>";
        
    ?>
    
</body>
</html>


<!-- Infine nella pagina riepilogo.php mostrare il contenuto delle variabili di sessione:
- le frasi (con massima importanza) devono essere inserite all'interno di una lista non ordinata <ul>
- gli altri due dati devono essere inseriti in una tabella che inlude una riga di intestazione.
Anche qui deve essere possibile ritornare nella pagina frase.html, attraverso un link. -->