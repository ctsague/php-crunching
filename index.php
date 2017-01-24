<?php
//strlen calcule la taille d'une chaine
// count les éléments d'un tableau
$string = file_get_contents("dictionnaire.txt", FILE_USE_INCLUDE_PATH);
$dico = explode("\n", $string);

$nb_mots_du_dico = count($dico);
echo '<br>'.'Ce dictionnaire contient : '.$nb_mots_du_dico.' mots.';

//Combien de mots font exactement 15 caractères ?

$compteur = 0;
foreach($dico as $value) {
if (strlen($value) === 15) {
        $compteur ++;
    }
}
echo '<br> Le dico contient : '.$compteur.' mots à 15 caractères';

//Combien de mots contiennent la lettre « w » ?

$word_have_w=0;
foreach ($dico as $value) {
	$pos_end = strpos($value, "w");	
	if (!$pos_end === false) {
		$word_have_w++;
	}
}
echo '<br>'.$word_have_w.'contiennent la lettre W';

//Combien de mots finissent par la lettre « q » ?



?>