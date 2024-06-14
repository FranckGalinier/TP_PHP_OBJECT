<?php use Core\Session\Session;
use App\AppRepoManager; ?>

<main>
<h1> Ajouter une annonce <h1>

<?php include(PATH_ROOT . 'views/_templates/_message.html.php') ?>

<form action="/add-annonce-form" method="POST" enctype="multipart/form-data">
  
<input type="hidden" name="user_id" value="<?= Session::get(Session::USER)->id  ?>">
<h3>Le nom du logement</h3>
<div class="box-auth-input">
    <input type="text" name="name" class="form-control">
</div>
<h3>Type de logement</h3>
<select name="typeLogement" id="te">
<?php foreach(AppRepoManager::getRm()->getTypeLogementRepository()->getAllTypeLogement() as $type):

?>
    <option value="<?= $type->label ?>"><?= $type->label ?></option>
    
<?php endforeach ?>
</select>

<h3>Les équipements</h3>
<div>
  <?php foreach(AppRepoManager::getRm()->getEquipementRepository()->getAllEquipement() as $equipement): ?>

    <div>
      <input type="checkbox" name="equipement" value="<?= $equipement->id ?>" role="switch">
    </div>
    <img class="icon-equipement" src="/assets/icons/<?= $equipement->image_path ?>" alt="icones<?= $equipement->label ?>" height="87"
    width="100">
    <label> <?= $equipement->label ?></label>
    <?php endforeach ?>
</div>

<h3>Description</h3>
<textarea name="description" form-control></textarea>
<h3>Prix par nuit</h3>
<input type="number" name="price">
<label for="price">€</label>
<h3>Nombre de personnes max</h3>
<input type="number" name="nb_voyageur" value="1" min="1" max="10">

<h3>Nombre de chambres max</h3>
<input type="number" name="nb_rooms" value="1" min="1" max="10">

<h3>Taille du logement</h3>
<input type="number" name="size" value="1" min="1" max="500">
<label for="size">m2</label>

<h2>Adresse du logement</h2>
<input type="text" name="address">
<h3>Ville du logement</h3>
<input type="text" name="city">
<h3>ZIPCODE</h3>
<input type="number" name="city">
<h3>Pays</h3>
<input type="text" name="country">
<h3>Phone</h3>
<input type="number" name="phone">

<button type="submit" class="call-action">Je crée mon annonce</button>
</form>
</main>