<?php

abstract class Personne{
    private int $id;
    private string $nomComplet;
    private string $nbrePersonne;
    protected string $role;
    

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of nomComplet
     */ 
    public function getNomComplet()
    {
        return $this->nomComplet;
    }

    /**
     * Set the value of nomComplet
     *
     * @return  self
     */ 
    public function setNomComplet($nomComplet)
    {
        $this->nomComplet = $nomComplet;

        return $this;
    }

    /**
     * Get the value of nbrePersonne
     */ 
    public function getNbrePersonne()
    {
        return $this->nbrePersonne;
    }

    /**
     * Set the value of nbrePersonne
     *
     * @return  self
     */ 
    public function setNbrePersonne($nbrePersonne)
    {
        $this->nbrePersonne = $nbrePersonne;

        return $this;
    }

    /**
     * Get the value of role
     */ 
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set the value of role
     *
     * @return  self
     */ 
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }
}