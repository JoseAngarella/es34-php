<?php
    
    if(!isset($_SESSION['frasi_massima_importanza'])){
        $_SESSION['frasi_massima_importanza']=array();
    }
    if(!isset($_SESSION['totale_caratteri_inviati'])){
        $_SESSION['totale_caratteri_inviati']=0;
    }
    if(!isset($_SESSION['totale_parole_inviate'])){
        $_SESSION['totale_parole_inviate']=0;
    }

?>