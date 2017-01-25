<?php
//strlen calcule la taille d'une chaine
// count les éléments d'un tableau
$string = file_get_contents("dictionnaire.txt", FILE_USE_INCLUDE_PATH);
$dico = explode("\n", $string);

$nb_mots_du_dico = count($dico);
echo '<p>'.'Ce dictionnaire contient : '.$nb_mots_du_dico.' mots.<p>';

//Combien de mots font exactement 15 caractères ?

$compteur = 0;
foreach($dico as $value) {
if (strlen($value) === 15) {
        $compteur ++;
    }
}
echo '<p> Le dico contient : '.$compteur.' mots à 15 caractères.<p>';

//Combien de mots contiennent la lettre « w » ?

$word_have_w=0;
foreach ($dico as $value) {
	$pos_end = strpos($value, "w");	
	if (!$pos_end === false) {
		$word_have_w++;
	}
}
echo '<p>'.$word_have_w.' mots du dico contiennent la lettre w.<p>';

//Combien de mots finissent par la lettre « q » ?
	$count_q=0;
foreach ($dico as $value) {
	$q_at_end = substr($value, -1); 
	if($q_at_end ==='q'){
		$count_q++;
	}	
}
echo '<p>'.$count_q.' mots du dico se terminent avec la lettre q.<p>';



?>