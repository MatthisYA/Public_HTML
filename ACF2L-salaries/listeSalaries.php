<?php
    require_once("header.html");
    require_once("fonctions.php");
    $nbSalaries = getNbSalaries();
    $listeSalaries = getAllSalaries();
?>
    <div class="container my-5">
    <table class="table table-hover">
      <th>id</th>
      <th>nom</th>
      <th>prenom</th>
      <th>date-naissance</th>
      <th>date-embauche</th>
      <th>salaire</th>
      <th>service</th>
      <?php foreach ($listeSalaries as $leSalarie): ?>
<tr>
<td><?php echo $leSalarie['idsalaries']; ?></td>
<td><?php echo $leSalarie['nom']; ?></td>
<td><?php echo $leSalarie['prenom']; ?></td>
<td><?php echo $leSalarie['date_naissance']; ?></td>
<td><?php echo $leSalarie['date_embauche']; ?></td>
<td><?php echo $leSalarie['salaire']; ?></td>
<td><?php echo $leSalarie['service']; ?></td>
</tr>
<?php endforeach; ?>
</table>
<p>nombre de salariés :<?php echo $nbSalaries ; ?></p>
</div>
<?php require_once('footer.html'); ?>

