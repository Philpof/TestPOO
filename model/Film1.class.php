<?php

class Film1
{
// "propriétés", "attributs", "membres" ou "champs" : c'est pareil !

  // Variables :
  private $id;
  private $nom;
  private $realisateur;
  private $annee;

  // Fonctions ou méthodes :

  // le contructeur :
  public function __construct($newId, $newNom, $newRealisateur, $newAnnee) {
    $this->id = $newId;
    $this->nom = $newNom;
    $this->realisateur = $newRealisateur;
    $this->annee = $newAnnee;
  }

    // les méthodes qui servent à récupérer des valeurs sont appelées des getters et on fera commencer leur nom par get
    public function getID1 () {
      return $this->id;
    }

    public function getNom1 () {
      return $this->nom;
    }

    public function getRealisateur1 () {
      return $this->realisateur;
    }

    public function getAnnee1 () {
      return $this->annee;
    }

}
