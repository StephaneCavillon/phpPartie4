<h2>Exercice 6 </h2>
<p>Faire une fonction qui prend trois paramètres : le nom, le prénom et l'âge d'une personne. Elle doit renvoyer une chaine de la forme :  
Bonjour + nom + prénom + , tu as + age + ans.</p>


<?php

function bonjour($name, $lastname, $age){
    echo 'Bonjour ' . $lastname . ' ' . $name . ', tu as ' . $age . ' ans.';
}

bonjour('stephane', 'cavillon', 31);
?>
