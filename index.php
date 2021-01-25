<?php

function ReurnTrue() {
    return true;
}

function Chaine(string $chaine) {
    return $chaine;
}

function Blabla(string $chaine1, string $chaine2) {
    echo $chaine1 . $chaine2;
}

function nombre(int $nbr1, int $nbr2) {
    if ($nbr1 > $nbr2) {
        return $nbr1;
    }
    elseif ($nbr1 < $nbr2) {
        return $nbr1;
    }
    else {
        return $nbr1 . " " . $nbr2;
    }
}

function conca(string $qqch, int $chiffre) {
    echo $qqch . $chiffre;
}

function Presentation(string $nom, string $prenom, int $age) {
    echo "Bonjour $nom $prenom tu as $age ans";
}

function genre(int $age, string $genre) {
    if ($genre === "Homme" && $age >= 18) {
        echo "Vous êtes un $genre et vous êtes majeur <br>";
    }
    elseif ($genre === "Homme" && $age < 18) {
        echo "Vous êtes un $genre et vous êtes mineur <br>";
    }
    elseif ($genre === "Femme" && $age < 18) {
        echo "Vous êtes une $genre et vous êtes mineure <br>";
    }
    elseif ($genre === "Femme" && $age >= 18) {
        echo "Vous êtes une $genre et vous êtes majeure <br>";
    }
}


function calcul($nbr, $step = 1, $step2 = 2, $step3 = 3) {
    return $nbr += ($step + $step2 + $step3);
}
$valeur = 0;

$valeur = calcul($valeur, 5, 6, 4);
echo $valeur;