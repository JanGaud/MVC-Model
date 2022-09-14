
    <div class="comImg">
        <img src=".\resources\img\Discussion.png" alt="">
    </div>

    <div>

        <?php
         foreach($data as $row){
        ?>
        <article>
            <h3><?= $row['titre']?></h3>
            <h4>Auteur: <?= $row['nom']?></h4>
            <small>Date: <?= substr($row['date_publication'], 0, 10);?></small>
            <p><?= $row['article']?></p>
        </article>
        <?php }?>

    </div>