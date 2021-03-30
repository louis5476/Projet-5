<?php

require_once 'ControleurAccueil.php';
require_once 'ControleurReservation.php';
require_once 'Vue.php';

class Routeur {

    private $ctrlAccueil;
    private $ctrlReservation;

    public function __construct() {
        $this->ctrlAccueil = new ControleurAccueil();
        $this->ctrlReservation = new ControleurReservation();
    }

    // Route une requête entrante : exécution l'action associée
    public function routerRequete() {
        try {
            if (isset($_GET['action'])) {

                // ACTION POUR ATTEINDRE LA PAGE DE RESERVATION
                if ($_GET['action'] == 'reservation') {
                    $this->ctrlReservation->reservation();
                }

                else
                    throw new Exception("Action non valide"); 
                }
            else {  // aucune action définie : affichage de l'accueil
                $this->ctrlAccueil->accueil();
            }
        }
        catch (Exception $e) {
            $this->erreur($e->getMessage());
        }
    }

    // Affiche une erreur
    private function erreur($msgErreur) {
        $vue = new Vue("Erreur");
        $vue->generer(array('msgErreur' => $msgErreur));
    }

    // Recherche un paramètre dans un tableau
    private function getParametre($tableau, $nom) {
        if (isset($tableau[$nom])) {
            return $tableau[$nom];
        }
        else
            throw new Exception("Paramètre '$nom' absent");
    }

}