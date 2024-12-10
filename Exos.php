
<!-- Variables -->
<?php $nom="kawaii";

 $age=11;$prenom="Manelle";
 echo $nom." ". $prenom.",". $age ." "."ans";
 $km=5;
echo $km;
 $string="water";
       $int=50;
       $float=20.5;
       $bool=true;
       
       echo$string." ".$int." ".$float." ".$bool;
 $koko=5;
 echo $koko;
 $kika=3+4;
echo $kika;
?>

<!-- Tableau -->
<?php

$mois=array("janvier" ," février", " mars" ," avril","mai" ,"juin" ,"juillet","août", "septembre","octobre", "novembre", "décembre");
 
 echo $mois[2];
 echo $mois[5];

$mois[7]="Août";
echo $mois[7];

 $departements = array( 
 59 => "Nord", 
 62 => "Pas-de-Calais", 
 80 => "Somme", 
 60 => "Oise", 
 02 => "Aisne" );
 echo $departements[59];
$departements[51]="marne";
echo $departements[51];


foreach ($mois as $mois_nom) {
       echo $mois_nom . "<br>";
   }
   
foreach ($departements as $nom) {
       echo $nom."<br>";
}

foreach ($departements as $key => $value)
{
       echo "Le département"." ".$value." a le numéro" ." ".$key."<br>";
}

?>
<!-- Conditions -->
<?php $age=45; if($age>=18){echo "vous etes majeur";}
else{ echo "vous etes mineur";

}?>
<?php $age=20;$genre="femme";
if($age>=18 && $genre=="homme"){echo
"Vous êtes un homme et vous êtes majeur ";}
elseif($age<=17 && $genre=="homme") {echo "- Vous êtes un
homme et vous êtes mineur ";}
elseif ($age>=18 && $genre=="femme"){echo 
"- Vous êtes une femme et vous êtes majeur";}
elseif($age<=17 && $genre=="femme") { echo
       "- Vous êtes une femme et vous êtes mineur";}
?>
       <?php
        $maVariable="Homme";
if($maVariable != 'Homme') {echo 'C\'est une développeuse !!!';} 
else{echo 'C\'est un développeur !!!';} 
?>

<?php $monAge=25;
echo ($monAge >= 18) ? 'Tu es majeur' : 'Tu n\'es pas majeur';
?>
<!-- (condition) ? valeur_si_vrai : valeur_si_faux; -->
<?php $monAge=2;
if ($monAge >= 18) {echo 'Tu es majeur';}  
else {echo 'Tu n\'es pas majeur'; } 
?>


<!-- Boucles -->
<?php $maVariable=true;
 if ($maVariable == false) {echo 'c\'est pas bon !!!';}  else {echo 'c\'est ok !!';} 
?>

<?php 
$traf1=0;
$traf2=50;
while ($traf1<=20) {
       $resultat =$traf1*$traf2;
       echo "resultat de $traf1 *$traf2=$resultat<br>";
       $traf1++;
}


$var1=100;
$var2=60;
while ($var1>10){
       $resultat2 =$var1/$var2;
       echo "resultat de $var1/$var2=$resultat2<br>";
       $var1--;
}


$terre=1;
while ($terre<10){
       echo "valeur: $terre<br>";
       $terre += $terre/2;

}

$tiger= "on y arrive presque";
for($i=1 ; $i<=15 ; $i++){
       echo $i." ".$tiger."<br>";
}
$tortue="c'est presque bon";
for ($i=20 ; $i>=0 ; $i-=1){
       echo $i. " ".$tortue."<br>";
}


$lion="on tient le bon bout";
for($i=1; $i<=100; $i+=14){
       echo $i. " ".$lion."<br>";
}

$gazelle="enfin";
for($i=200; $i>=0;$i-=12){
       echo $i." ".$gazelle."<br>";
}
?>


<!-- Fonctions -->

<?php function retourneVrai() { return true; } // Appel de la fonction
 echo retourneVrai(); // Affichera 1, true est converti en 1 
?>

<?php

$chaine="Bonjour, monde !";
function retourneChaine($chaine) {
    return $chaine;
}


echo retourneChaine($chaine);
?>







