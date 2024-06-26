<?php

use Core\Session\Session;

if ($auth::isAuth()) $user_id = Session::get(Session::USER)->id;
?>
<!-- logo -->
<div class="nav-logo">
  <a href="/">
    <img src="/assets/icons/Airbnb_Logo_Bélo.svg" alt="logo appli" height="50px" width="100px">
  </a>
</div>

<!--  barre de navigation -->
<nav class="nav-user">
  <ul class="d-flex justify-content-center">
    <li class="m-1"><a href="/hosting">Aujourd'hui</a></li>

  </ul>
</nav>
</div>

<div class="nav-user">
  <?php if ($auth::isAuth()) : ?>
    <li class="m-1"><a href="/user/list-my-logement/<?= $user_id ?>">Annonce</a></li>
  <?php else : ?>
    <li class="m-1"><a href="/connexion">Mettre en ligne mon logement</a></li>
  <?php endif; ?>
</div>
</div>

<!-- menu du profil -->
<div class="nav-user">
  <div>

  </div>
  <nav>
    <ul>
      <li>
        <?php

        if ($auth::isAuth()) :

        ?>

          <div class="dropdown custom-link">
            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="svg-nav bi bi-list"></i>
              <i class="svg-nav bi bi-person-circle"></i></a>


            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">


              <li><a href="/profil/<?= Session::get(Session::USER)->id ?>" class="dropdown-item custom-link">Profil</a></li>

              <li><a href="/user/list-order/<?= $user_id ?>" class="dropdown-item custom-link">Réservations</a></li>
              <li><a href="/user/create-logement/<?= $user_id ?>" class="dropdown-item custom-link">Créer une annonce</a></li>

              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a href="/" class="dropdown-item custom-link">Passez en mode voyageur</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item custom-link" href="/logout"> Se Déconnecter</a></li>
            </ul>
          </div>
        <?php else : ?>
          <div class="dropdown custom-link">
            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="svg-nav bi bi-list"></i>
              <i class="svg-nav bi bi-person-circle"></i></a>


            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              <li><a class="dropdown-item custom-link" href="/connexion">Connexion</a></li>
              <li><a class="dropdown-item custom-link" href="/inscription">Inscription</a></li>
            </ul>
          </div>
        <?php endif; ?>

      </li>
    </ul>

  </nav>
</div>