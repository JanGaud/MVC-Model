    <div class="articleForum">

        <?php
         foreach($data as $row){
        ?>
        <article>
           <div class="auteur"> <h4>Auteur: <?= $row['nom']?></h4> <div class="medaillon"><img src="./resources/img/avatar.webp" alt=""></div> </div> 
            <h3><?= $row['titre']?></h3> 
            <small>Date: <?= substr($row['date_publication'], 0, 10);?></small>
            <p><?= $row['article']?></p>
        </article>
        <?php }?>

    </div>