<?php
$string = file_get_contents("dictionnaire.txt", FILE_USE_INCLUDE_PATH);
$dico = explode("\n", $string);

$nb_mots_du_dico = count($dico);
echo '<br>'.'Ce dictionnaire contient : '.$nb_mots_du_dico.' mots.';

?>