

<form class="redaction" action="index.php?module=user&action=saveArticle" method="post">
    <div class="flexRowClose"><h3>Rédigez votre article</h3> <small><?=date("Y-m-d");?></small></div>
    <input type="text" name="titre">
        <textarea name="article" id="article" cols="30" rows="10" required>...</textarea>
        <input type="submit" value="Soumettre">
</form>
