<?php
    class Inscription{
 // Attributs Instances
    // Attributs navigationnels => ce sont des attributs issus des relations(attributs d'instances) ou associations

    // Attributs de Classe
    // ManyToOne(Inscription) -> OneToMany(AC) => +ieurs inscrits 1 attaché: fonctions qui retourne un AC

    /* null => il est possible d'avoir une inscription qui n'a pas 1 attaché.
    public function ac():AC|null{
        return null;
    }
    */
    // Si une inscription va toujours retourné 1 AC on écrit cette fonction
    public function ac():AC{
        return new AC();
    }
    
     // ManyToOne => AnneeScolaire () : +ieurs inscriptions dans une anneeScolaire
    
    public function anneeScolaire():anneeScolaire{
        return new anneeScolaire();
    }


    }