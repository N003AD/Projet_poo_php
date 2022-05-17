<?php
// Héritage: 
class AC extends User{
     // OneToMany(AC) => Inscription(ManyToOne) ( 1 attaché plusieurs inscrits): on aura 1 Tableau d'inscription
    // Constructeur permet d'initialiser l'ensembles de variables que nous voulons initialiser
    // 1 ière approche
    private array $inscription;

    // Relation entre 
    /* 2 ième approche: Fonctions navigationnelles => fonctions issues des associations
      On ne représente pas les relations à travers les attributs mais à travers des relations */
     
      // Remarque: Dans notre projet on va utiliser la 2 ième approche:
      // Les relations seront traduit en des fonctions

      public function inscriptions():array{
          return [];
      }

    public function __construct()
    {
        $this->role="ROLE_AC";
        $this->inscription=[]; // Tableau d'inscription
    }


}