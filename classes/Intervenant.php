<?php

class Intervenant
{
    private $nom;
    private $prenom;
    private $affectation;
    private $url;
    private $id;

    public function __construct(int $id,string $nom,string $prenom,string $affectation,string $url)
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->affectation = $affectation;
        $this->url  = $url;

    }

    public function getId(){ return $this->id;}
    public function getNom(){ return $this->nom;}
    public function getPrenom(){ return $this->prenom;}
    public function getAffectation(){ return $this->affectation;}
    public function getUrl(){ return $this->url;}

    public function setId(int $id){ $this->id = $id;}
    public function setNom(string $nom){ $this->nom = $nom;}
    public function setPrenom(string $prenom){ $this->prenom = $prenom;}
    public function setAffectation(string $affectation){ $this->affectation = $affectation;}
    public function setUrl(string $url){ $this->url  = $url;}
}