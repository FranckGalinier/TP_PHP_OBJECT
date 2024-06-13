<?php

namespace App;

use MiladRahimi\PhpRouter\Router;
use App\Controller\HomeController;
use App\Controller\AuthController;
use Core\Database\DatabaseConfigInterface;
use MiladRahimi\PhpRouter\Exceptions\RouteNotFoundException;
use MiladRahimi\PhpRouter\Exceptions\InvalidCallableException;

class App implements DatabaseConfigInterface
{
  //on définit des constantes de la base de données
  private const DB_HOST = "database";
  private const DB_NAME = "nom_de_bdd";
  private const DB_USER = "nom_utilisateur";
  private const DB_PASS = "mdp_utilisateur";

  private static ?self $instance = null;
  //on crée une méthode public appelé au demarrage de l'appli dans index.php
  public static function getApp(): self
  {
    if (is_null(self::$instance)) {
      self::$instance = new self();
    }
    return self::$instance;
  }

  //on crée une propriété privée pour stocker le routeur
  private Router $router;
  //méthode qui récupère les infos du routeur
  public function getRouter()
  {
    return $this->router;
  }

  private function __construct()
  {
    //on crée une instance de Router
    $this->router = Router::create();
  }

  //on a 3 méthodes a définir 
  // 1. méthode start pour activer le router
  public function start(): void
  {
    //on ouvre l'accès aux sessions
    session_start();
    //enregistrements des routes
    $this->registerRoutes();
    //démarrage du router
    $this->startRouter();
  }

  //2. méthode qui enregistre les routes
  private function registerRoutes(): void
  {
    //ON ENREGISTRE LES ROUTES ICI
    $this->router->get('/', [HomeController::class, 'home'] );
    //INFO: si on veut renvoyer une vue à l'utilisateur => route en "get"
    //INFO: si on veut traiter des données d'un formulaire => route en "post"
   //PARTIE AUTHENTIFICATION
   $this->router->get('/connexion', [AuthController::class, 'loginForm']);
  $this->router->get('/inscription', [AuthController::class, 'registerForm']);

  //PARTIE Réception des données du formulaire
  $this->router->post('/login', [AuthController::class, 'login']);


  }

  //3. méthode qui démarre le router
  private function startRouter(): void
  {
    try {
      $this->router->dispatch();
    } catch (RouteNotFoundException $e) {
      echo $e;
    } catch (InvalidCallableException $e) {
      echo $e;
    }
  }

  public function getHost(): string
  {
    return DB_HOST;
  }

  public function getName(): string
  {
    return DB_NAME;
  }

  public function getUser(): string
  {
    return DB_USER;
  }

  public function getPass(): string
  {
    return DB_PASS;
  }
}