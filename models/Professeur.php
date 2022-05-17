<?php
class Professeur extends Personne{
    public function __construct()
    {
        $this->role="ROLE_PROFESSEUR";
    }

    // Fonctions navigationnelles
    // ManyTOMany => avec Classe
    // +ieurs  Professeur + ieurs classe: quand j'ai 1 professeur j'aurais 1 tableau qui représente l'ensemble de ces classes
    public function classes():array{
        return[];
    }
}