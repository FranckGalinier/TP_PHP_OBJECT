<?php include(PATH_ROOT . 'views/_templates/_header.html.php'); ?>
<main class="container-form">
  <h1>Création de compte</h1>
  <!-- Affichage des erreurs s'il y en a -->
  <!-- si form result et form result a une erruer alors on affiche l'erreur -->
  <?php if ($form_result && $form_result->hasErrors()):?>
    <div class="alert alert-danger" role="alert">
      <?= $form_result->getErrors()[0]->getMessage() ?>
    </div>
  <?php endif ?>

  <!-- Formulaire -->
  <form class="auth-form" action="/register" method="POST">
    <div class="box-auth-input">
      <label class="detail-description">Adresse Email</label>
      <input type="email" class="form-control" name="email">
    </div>
    <div class="box-auth-input">
      <label class="detail-description">Mot de passe</label>
      <input type="password" class="form-control" name="password">
    </div>
    <div class="box-auth-input">
      <label class="detail-description">Confirmer le mot de passe</label>
      <input type="password" class="form-control" name="password_confirm">
    </div>
    <div class="box-auth-input">
      <label class="detail-description">Nom</label>
      <input type="text" class="form-control" name="lastname">
    </div>
    <div class="box-auth-input">
      <label class="detail-description">Prénom</label>
      <input type="text" class="form-control" name="firstname">
    </div>
    <button class="call-action" type="submit">Je m'inscris</button>
  </form>

  <p class="header-description">J'ai déjà un compte <a class="auth-link" href="/connexion">Connexion</a></p>
</main>