<?php

require_once 'Vue.php';

class ControleurAccueil {

  // Affiche l'accueil
  public function accueil() {
    $vue = new Vue("Accueil");
    $vue->generer(array());
  }
}