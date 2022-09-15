<?php

function forum_model_view(){
    require(CONNEX_DIR);
    $sql = "SELECT * FROM forum
    JOIN utilisateur on forum.userId = utilisateur.userId ORDER BY date_publication DESC";
    $result = mysqli_query($con, $sql);
    $result = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_close($con);
    return $result;
    
}


function forum_model_userArticle(){
    require(CONNEX_DIR);
    $sql = "INSERT INTO utilisateur (nom, mot_de_passe, date_naissance, nomUtilisateur) VALUES ('$nom','$motDePasse','$naissance','$utilisateur')";
    mysqli_query($con, $sql);
    mysqli_close($con);
}

?>