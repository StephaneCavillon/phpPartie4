<h2>Exercice 4 </h2>
<p>Faire une fonction qui prend en paramètre deux nombres. La fonction doit retourner :

    Le premier nombre est plus grand si le premier nombre est plus grand que le deuxième
    Le premier nombre est plus petit si le premier nombre est plus petit que le deuxième
    Les deux nombres sont identiques si les deux nombres sont égaux</p>

<?php
function compare($nb1, $nb2){
    if($nb1<$nb2){
        echo $nb1 . ' est plus grand que ' . $nb2;
    } else if ($nb1>$nb2){
        echo $nb1 . ' est plus petit que ' . $nb2;
    } else{
        echo $nb1 . ' est égal à ' . $nb2;
    }
}

?>