<?php

class Depense {

    private $nom;
    private $prix;
    private $date;

    public function getNom() {
        return $this->nom;
    }
    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function getPrix(){
        return $this->prix;
    }
    public function setPrix($prix) {
        $this->prix = $prix;
    }

    public function getDate() {
        return $this->date;
    }
    public function setDate($date) {
        $this->date= $date;
    }



}