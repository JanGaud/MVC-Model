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

function get_articles($userId){
    require(CONNEX_DIR);
    $sql = "SELECT * FROM forum
    JOIN utilisateur on forum.userId = utilisateur.userId WHERE utilisateur.userId = $userId ORDER BY date_publication DESC";
    $result = mysqli_query($con, $sql);
    $result = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $result;
}

function save_article($request){
    $date = date("Y-m-d");
    $userId = (int)$_SESSION['userId'];
    require(CONNEX_DIR);
    foreach($request as $key=>$value){
        $$key=mysqli_real_escape_string($con,$value);
    }
    $sql = "INSERT INTO forum (titre, article, date_publication, userId) 
    VALUES ('$titre', '$article', '$date', $userId)";  
    $result = mysqli_query($con, $sql);
}
?>