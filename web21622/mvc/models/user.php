<?php
function log_user($request){
    require(CONNEX_DIR);
    foreach($request as $key=>$value){
        $$key=mysqli_real_escape_string($con,$value);
    }
    $sql = "SELECT salt, mot_de_passe, userId FROM utilisateur WHERE nomUtilisateur = '$utilisateur'";
    $result = mysqli_query($con, $sql);
    $result = mysqli_fetch_all($result, MYSQLI_ASSOC);
    if(count($result) == 0){
        return null;
    }
    $salt = $result[0]["salt"];
    $mdp = $result[0]["mot_de_passe"];
    mysqli_close($con);
    if(password_verify($salt . $motDePasse, $mdp)){
        return $result[0]["userId"];
    }    
    return null;
}

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
    $salt = rand();
    $motDePasse = password_hash($salt . $motDePasse, PASSWORD_BCRYPT);
    $sql = "INSERT INTO utilisateur (nom, mot_de_passe, date_naissance, nomUtilisateur, salt) VALUES ('$nom','$motDePasse','$naissance','$utilisateur','$salt')";
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