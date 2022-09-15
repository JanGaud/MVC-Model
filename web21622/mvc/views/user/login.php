<form class="inscription" action="index.php?module=user&action=userArticle" method="post">
        <h3>Connectez-vous</h3>

        <label>
            Utilisateur
            <input type="text" name="utilisateur">
        </label>

        <label>
            Mot de passe
            <input type="password" name="motDePasse">
        </label>
        <div class="erreurAlign">
                <input type="submit" value="Se connecter"> 
        </div>   
        <div class="erreur">    
            <?php
                if(isset($_SESSION["erreur"])){
                    echo $_SESSION["erreur"];
                    unset($_SESSION["erreur"]);
                }
            ?>
        </div>
</form>