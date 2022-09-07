<?php
function user_model_list(){
    require(CONNEX_DIR);
    $sql = "SELECT * FROM utilisateur";
    $result = mysqli_query($con, $sql);
    $result = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_close($con);
    return $result;
}

function user_model_insert($request){
    require(CONNEX_DIR);
    foreach($request as $key=>$value){
        $$key=mysqli_real_escape_string($con,$value);
    }
    $motDePasse = password_hash($motDePasse, PASSWORD_BCRYPT);
    $sql = "INSERT INTO utilisateur (nom, mot_de_passe, date_naissance, nomUtilisateur) VALUES ('$nom','$motDePasse','$naissance','$utilisateur')";
    mysqli_query($con, $sql);
    mysqli_close($con);
}

function user_model_view($request){
    require(CONNEX_DIR);
    foreach($request as $key=>$value){
        $$key=mysqli_real_escape_string($con,$value);
    }
    $sql = "SELECT * FROM utilisateur WHERE userId = '$id'";
    $result = mysqli_query($con, $sql);
    $result = mysqli_fetch_assoc($result);
    mysqli_close($con);
    return $result;
}

function user_model_edit($request){
    require(CONNEX_DIR);
    foreach($request as $key=>$value){
        $$key=mysqli_real_escape_string($con,$value);
    }
    $sql = "UPDATE utilisateur SET nom = '$nom', nomUtilisateur = '$utilisateur', date_naissance = '$date_naissance' WHERE userId = '$userId'";
    mysqli_query($con, $sql);
    mysqli_close($con);
}

function user_model_delete($request){
    require(CONNEX_DIR);
    foreach($request as $key=>$value){
        $$key=mysqli_real_escape_string($con,$value);
    }
    $sql = "DELETE FROM utilisateur WHERE userId = '$userId'";
    mysqli_query($con, $sql);
    mysqli_close($con);
}

function user_model_exist($request){
    require(CONNEX_DIR);
    foreach($request as $key=>$value){
        $$key=mysqli_real_escape_string($con,$value);
    }
    $sql = "SELECT * FROM utilisateur WHERE nomUtilisateur = '$utilisateur'";
    $result = mysqli_query($con, $sql);
    mysqli_close($con);
    return mysqli_num_rows($result) != 0;
}
?>