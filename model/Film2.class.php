<?php

class Film2
{
// "propriétés", "attributs", "membres" ou "champs" : c'est pareil !

  // Variables :
  private $id;
  private $nom;
  private $realisateur;
  private $annee;

  // Fonctions ou méthodes :

    // les méthodes qui servent à récupérer des valeurs sont appelées des getters et on fera commencer leur nom par get

    public function getID2 () {
      return $this->id;
    }

    public function getNom2 () {
      return $this->nom;
    }

    public function getRealisateur2 () {
      return $this->realisateur;
    }

    public function getAnnee2 () {
      return $this->annee;
    }

    // les méthodes qui servent à définir / modifier / mettre à jour une valeur sont appelées des setters et on fera commencer leur nom par set

    public function setID2 ($newID) {
      $this->id = $newID;
    }

    public function setNom2 ($newNom) {
      $this->nom = $newNom;
    }

    public function setRealisateur2 ($newRealisateur) {
      $this->realisateur = $newRealisateur;
    }

    public function setAnnee2 ($newAnnee) {
      $this->annee = $newAnnee;
    }







}
