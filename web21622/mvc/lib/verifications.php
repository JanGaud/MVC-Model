<?php
//retourne faux si elle ne contient pas que des lettres et espace
function containLetterAndSpace($inputString){
    $valide = true;
    for($i = 0; $i < strlen($inputString); $i++){
        $valide = ($inputString[$i] >= 'a' && $inputString[$i] <= 'z') 
                || ($inputString[$i] >= 'A' && $inputString[$i] <= 'Z') 
                || $inputString[$i] == ' ';

        if(!$valide)
            break;    
    }

    return $valide;
}


// retourne faux si le mdp ne contient ps au moins 1 lettre et un chiffre
function containLetterAndDigit($inputString){
    $lettre = false;
    $chiffre = false; 

    for($i = 0; $i < strlen($inputString); $i++){  
        if(($inputString[$i] >= 'a' && $inputString[$i] <= 'z') 
        || ($inputString[$i] >= 'A' && $inputString[$i] <= 'Z')){
            
            $lettre = true;
        }
        if($inputString[$i] >= '0' && $inputString[$i] <= '9'){
            
            $chiffre = true;
        }
        if($chiffre && $lettre){
            break;
        }
    } 
    return $chiffre && $lettre;
}

//fonction de validation de date de naissance aaaa-mm-jj

function dateValidation($date){
    $patternDate = "/^\d{4}-\d{2}-\d{2}$/";
    if(!preg_match($patternDate, $date)){
        return false;
    }

    $annee = (int)substr($date, 0, 4);
    $mois = (int)substr($date, 5, 2);
    $jours = (int)substr($date, 8, 2);

    if($annee > date("Y")){
        return false;
    }
    if($mois < 1 || $mois > 12){
        return false;
    }
    if($jours < 1 || $jours > 31){
        return false;
    }

    return true;
}
