<?php
//retourne faux si elle ne contient pas que des lettres et espace
function containLetterAndSpace($inputString){
    $valide = true;
    for($i = 0; $i < strlen($inputString); $i++){
        $valide = ($inputString[$i] >= 'a' && $inputString[$i] <= 'z') 
                || ($inputString[$i] >= 'A' && $inputString[$i] <= 'A') 
                || $inputString[$i] == ' ';

        if(!$valide)
            break;    
    }

    return $valide;
}


// retourne faux si le mdp ne contient pas au moins 1 lettre et un chiffre
function containLetterAndDigit($inputString){
    $lettre = false;
    $chiffre = false; 

    for($i = 0; $i < strlen($inputString); $i++){  
        if(($inputString[$i] >= 'a' && $inputString[$i] <= 'z') 
        || ($inputString[$i] >= 'A' && $inputString[$i] <= 'A')){
            
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
