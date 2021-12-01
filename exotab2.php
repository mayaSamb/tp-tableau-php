<?php

for($a=11;$a<=36;$a++)
{
$tab[$a]=chr(54+$a);
}

/*for($a=11;$a<=36;$a++)
{
echo " \n Elément d'indice $a : $tab[$a]  ";
} */


 foreach($tab as $cl=>$val)
{
echo " \n Elément d'indice $cl  : $val";
}
?> 

?>