<form class="inscription" action="index.php?module=user&action=insert" method="post">
        <h3>Inscription</h3>

        <label>
            Nom
            <input type="text" name="nom">
        </label>
        <label>
            utilisateur
            <input type="text" name="utilisateur">
        </label>
        <label>
            Date de naissance
            <input type="date" name="naissance">
        </label>

        <label>
            Mot de passe
            <input type="password" name="motDePasse">
        </label>
        <input type="submit">
</form>
    <div class="erreur">
        <?php
            if(isset($_SESSION["erreur"])){
                echo $_SESSION["erreur"];
                unset($_SESSION["erreur"]);
            }
        ?>
    </div>