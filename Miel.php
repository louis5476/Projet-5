<?php

require_once 'Modele.php';

class Miel extends Modele
{

    // Renvoie la liste de tous les pots, triés par identifiant décroissant
    public function getMiels()
    {
        $sql = 'SELECT ID as id, DATE as date, TITRE as titre, CONTENU as contenu from miel order by titre';
        $miels = $this->executerRequete($sql);
        return $miels;
    }

    // Renvoie les informations sur le miel
    public function getMiel($idMiel)
    {
        $sql = 'SELECT ID as id, DATE as date, TITRE as titre, CONTENU as contenu from miel where ID=?';
        $miel = $this->executerRequete($sql, array($idMiel));
        if ($miel->rowCount() > 0) {

            // if ($miel->rowCount() == 1) {
            return $miel->fetch();
        }
        // Accès à la première ligne de résultat
        else {
            throw new Exception("Aucun miel ne correspond à l'identifiant '$idMiel'");
        }
    }

    // Modifie les données du miel dans la table associée
    public function modifierMiel($titre, $contenu, $idMiel)
    {
        $sql = 'UPDATE miel SET titre=?, contenu=? WHERE `miel`.`ID` = ?';
        $modifierMiel = $this->executerRequete($sql, array($titre, $contenu, $idMiel));

        return $modifierMiel;
    }

}