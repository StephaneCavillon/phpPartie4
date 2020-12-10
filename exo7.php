<h2>Exercice 7 </h2>
<p>Faire une fonction qui prend deux paramètres : l'âge et le genre d'une personne. Le genre peut être :

    Homme
    Femme  


La fonction doit renvoyer en fonction des paramètres :

    Vous êtes un homme et vous êtes majeur
    Vous êtes un homme et vous êtes mineur
    Vous êtes une femme et vous êtes majeure
    Vous êtes une femme et vous êtes mineure


Gérer tous les cas.</p>


<?php
function genre($gender, $age){
    if($gender == 'Homme'){
        if($age >= 18){
            echo 'vous êtes un homme et majeur';
        } else {
            echo 'vous êtes un homme et mineur';
        }
    } else {
        if($age >= 18){
            echo 'vous êtes une femme et majeur';
        } else {
            echo 'vous êtes une femme et mineur';
        }
    }   
}

genre('Homme',31)
?>