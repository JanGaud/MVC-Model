<table class='listing'>
  <thead>
    <tr>
      <th>Nom</th>
      <th>Naissance</th>
      <th>utilisateur</th>
      <th>Editer</th>
      <th>Effacer</th>
    </tr>
  <thead>
  <tbody>
  <?php foreach($data as $row) { ?>
    <tr>
      <td><?php echo $row['nom'] ?></td>
      <td><?php echo date_format(date_create($row['date_naissance']),"Y/m/d") ?></td>
      <td><?php echo $row['nomUtilisateur'] ?></td>
      <td><a href="?module=user&action=view&id=<?php echo $row['userId'] ?>">Editer</a></td>
      <td><form action="?module=user&action=delete" method="post"><input type="hidden" name="userId" value="<?php echo $row['userId'] ?>"><input type="submit" Value="Effacer"></form></td>
    </tr>

    
  <?php } 
  ?>
  <tbody>
</table>