<div class="articleForum">
    
<?php 
if(isset($_SESSION["loged"]) && $_SESSION["loged"] == true){
    echo "user " . $_SESSION["userId"];
}
else{
    echo "user disconnected";
}
?>
<h1>Mes articles</h1>
<a href="?module=user&action=write">Créer un article</a>

<?php
         foreach($data as $row){
        ?>
        <article>
           <div class="flexRow"> <h4>Auteur: <?= $row['nom']?></h4> <div class="medaillon"><img src="./resources/img/avatar.webp" alt=""></div> </div> 
            <div class="flexRowClose"><small>Date: <?= substr($row['date_publication'], 0, 10);?></small>  <h3><?= $row['titre']?></h3> </div>
            <p><?= $row['article']?></p>
            <div class="moreBtn">
                <button>...</button>
            </div>
        </article>
        <?php }?>


</div>