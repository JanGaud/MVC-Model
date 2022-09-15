<?php
function user_controller_index(){
    require(MODEL_DIR.'/user.php');
    $data = user_model_list();
    //print_r($data);
    render(VIEW_DIR.'/user/index.php', $data);
}

function user_controller_create(){
    render(VIEW_DIR.'/user/create.php');
}

function user_controller_login(){
    render(VIEW_DIR.'/user/login.php');
}

function user_controller_write(){
    render(VIEW_DIR.'/user/write.php');
}

function user_controller_ownArticle(){
    render(VIEW_DIR.'/user/userArticle.php');
}


function user_controller_insert($request){
    require(MODEL_DIR.'/user.php');
    require(VERIF_DIR);

    //Verifier que le nom dutilisateur nexiste pas
    if(user_model_exist($request)){
        $_SESSION["erreur"] = "Le nom d'utilisateur existe deja!";
        header("Location: ?module=user&action=create");
    }

    //verifier que le nom est valide
    if(strlen($request["nom"]) < 2 
                || strlen($request["nom"]) > 25 
                || !containLetterAndSpace($request["nom"])){

        $_SESSION["erreur"] = "Le nom est invalide!";
        header("Location: ?module=user&action=create");
    }

    //verifier le mot de passe 
    if(strlen($request["motDePasse"]) < 6 
                || strlen($request["motDePasse"]) > 20 
                || !containLetterAndDigit($request["motDePasse"])){
        
        $_SESSION["erreur"] = "Le mot de passe est invalide!";
        header("Location: ?module=user&action=create");
    }
    // si le nom dutilisateur existe, renvoyer un message derreur
    // si non...
    user_model_insert($request);
    header("Location: ?module=user&action=index");
}

function user_controller_view($request){
    //print_r($request);,
    require(MODEL_DIR.'/user.php');
    $data = user_model_view($request);
    //print_r($data);
    render(VIEW_DIR.'/user/view.php', $data);
}

function user_controller_edit($request){
    require(MODEL_DIR.'/user.php');
    user_model_edit($request);
    header("Location: ?module=user&action=index");
}

function user_controller_delete($request){
    require(MODEL_DIR.'/user.php');
    user_model_delete($request);
    header("Location: ?module=user&action=index");
}

?>