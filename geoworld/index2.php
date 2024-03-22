<?php
/**
 * Home Page
 *
 * PHP version 7
 *
 * @category  Page
 * @package   Application
 * @author    SIO-SLAM <sio@ldv-melun.org>
 * @copyright 2019-2021 SIO-SLAM
 * @license   http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link      https://github.com/sio-melun/geoworld
 */

?>
<?php  require_once 'header.php'; ?>
<?php
require_once 'inc/manager-db.php';
if(isset($_GET['continent'])){
$continent=$_GET['continent'];}else{
$continent='Asia';}
$desPays = getCountriesByContinent($continent);
$continents = getContinents();
?>

<main role="main" class="flex-shrink-0">

  <div class="container">
    <h1>Les pays en <?php echo $continent?></h1>
    <div>
     <table class="table">
         <tr>
           <th>Drapeau</th>
           <th>id</th>
           <th>Nom</th>
           <th>Population</th>
           <th>Superficie</th>
           <th>Esperance de vie</th>
           <th>Dirigeant du pays</th>
         </tr>
       <?php
       // $desPays est un tableau dont les éléments sont des objets représentant
       // des caractéristiques d'un pays (en relation avec les colonnes de la table Country)
          foreach($desPays as $pays): ?>
          <tr>
            <td> <img src = "./images/drapeau/<?php if (empty($pays->Code2)){echo strtolower($pays->Code2);} else {echo "Pas de drapeau";} ?>.png">
            <td> <?php echo $pays->id ?></td>
            <td> <?php echo $pays->Name ?></td>
            <td> <?php echo $pays->Population ?></td>
            <td> <?php echo $pays->SurfaceArea ?></td>
            <td> <?php echo $pays->LifeExpectancy ?></td>
            <td> <?php echo $pays->HeadOfState ?></td>
          </tr>
          <?php endforeach; ?>
     </table>
    </div>
    <p>
        <code>
      <?php
        //var_dump($desPays[0]);
        ?>
        </code>
    </p>
    
  </div>
</main>

<?php
require_once 'javascripts.php';
require_once 'footer.php';
?>
