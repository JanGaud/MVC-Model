<div class="articleForum">

<?php
 foreach($data as $row){
?>
<article>
   <div class="flexRow"> <h4>Auteur: <?= $row['nom']?></h4> <div class="medaillon"><img src="./resources/img/avatar.webp" alt=""></div> </div> 
    <div class="flexRowClose"><small>Date: <?= substr($row['date_publication'], 0, 10);?></small>  <h3><?= $row['titre']?></h3> </div>
    <p><?= $row['article']?></p>
    <button>...</button>
</article>
<?php }?>

</div>