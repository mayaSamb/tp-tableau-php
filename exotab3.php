<?php
$tab = [];
$i=0;
while(true){
    $nomEtudiant = readline('Nom de l\'etudiant');
    $noteEtudiant = readline('Note de 1\'etudiant');
    $tab[$nomEtudiant]=$noteEtudiant;
        if(readline(' "fin" pour arreter, n\'importe quoi d\'autre pour continuer : ') == "fin")
        {
            print_r($tab);
        break;
        }
        else
        echo " \n";
    }
    /*
ksort($tab);
foreach ($tab as $key => $val) {
    echo "$key = $val\n";
}*/

arsort($tab);
foreach ($tab as $key => $val) {
    echo "$key = $val\n";
}
function moyenne($tab)
{
    $moy= array_sum($tab)/count($tab);
    return $moy;
}


 echo " \n la note minimale de cette classe ",(min($tab));
 echo " \n la moyenne de cette classe ".moyenne($tab);


?>