<?php

require_once 'Miel.php';
require_once 'Vue.php';

class ControleurReservation {

  private $miel;

  public function __construct() {
    $this->miel = new Miel();
  }

  // Affiche la liste des pots
  public function miels() {
    $vue = new Vue("Miels");
    $miels = $this->miel->getMiels();
    $vue->generer(array('miels' => $miels));
   }

   // Affiche les détails sur un pot
  public function miel($idMiel) {
    $miel = $this->miel->getMiel($idMiel);
    $vue = new Vue("Miel");
    $vue->generer(array('miel' => $miel));
  }

  // Redirection vers la page de reservation
  public function reservation()
  {
      $vue = new Vue("Reservation");
      $miels = $this->miel->getMiels();
    $vue->generer(array('miels' => $miels));
  }

   // Affiche la page pour modifier un prix
   public function changerPrix($idMiel)
   {
       $miel = $this->miel->getMiel($idMiel);
       $vue = new Vue("ModifierPrix");
       $vue->generer(array('miel' => $miel));
   }

   // Modifie un prix déjà existant
   public function modifierPrix($titre, $contenu, $idMiel)
   {
       $modifier = $this->miel->modifierPrix($titre, $contenu, $idMiel);
       if ($modifier) {
           header('Location: index.php?action=admin');
       }
       throw new \Exception('Impossible de modifier le prix !');
   }

   // Supprime les données liées à un pot de la bdd
   public function supprimer($idMiel)
    {
        $miel = $this->miel->getBillet($idMiel);
        $supprimer = $this->miel->deleteBillet($idMiel);
        $supprimer = $this->miel->deleteBilletCom($idMiel);
        if ($supprimer) {
            header('Location: index.php?action=admin');

        }
        // Actualisation de l'affichage
        throw new \Exception('Impossible de supprimer l\'article');

    }
}