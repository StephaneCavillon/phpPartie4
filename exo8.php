<h2>Exercice 8 </h2>
<p>Faire une fonction qui prend en paramètre trois nombres et qui renvoit la somme de ces nombres.  
Tous les paramètres doivent avoir une valeur par défaut.</p>

<?php
function sum($nb1=1, $nb2=2, $nb3 =0){
    echo $nb1 .'+'. $nb2 .'+'. $nb3 .'='. ($nb1+$nb2+$nb3);
    return ($nb1 + $nb2 + $nb3);

}

sum(5,3)
?>