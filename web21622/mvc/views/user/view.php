<form class="inscription" index.php?module="user&action=edit" method="post">
    <input type="hidden" name="userId" value="<?php echo $data['userId']; ?>">
        <label>
            Nom
            <input type="text" name="nom" value="<?php echo $data['nom']; ?>">
        </label>
        <label>
            Utilisateur
            <input type="text" name="utilisateur" value="<?php echo $data['nomUtilisateur']; ?>">
        </label>
        <label>
            Date de naissance
            <input type="date" name="date_naissance" value="<?php echo date_format(date_create($data['date_naissance']),"Y-m-d") ?>">
        </label>
        <input type="submit">
    </form>
    <div>
        <?php
            if(isset($_SESSION["erreur"])){
                echo $_SESSION["erreur"];
            }
        ?>
    </div>