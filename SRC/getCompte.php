<?php

include '../configuration/config.php';
include '../SRC/cpt.php';


function getListeComptes(){
     return Compte :: getcompte();
}
?>

