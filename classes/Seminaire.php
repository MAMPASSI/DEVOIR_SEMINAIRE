<?php

class Seminaire
{
    private $id_as;
    private $id_it;
    private $titre;
    private $resume;
    private $lieu;
    private $date_int;
    private $date_mise_jour;

    public function __construct(int $id_as,int $id_it,string $titre,string $resume,string $lieu,string $date_int,string $date_mise_jour)
    {
        $this->id = $id_as;
        $this->intervenant = $id_it;
        $this->titre = $titre;
        $this->resume = $resume;
        $this->lieu = $lieu;
        $this->date = $date_int;
        $this->date_mise = $date_mise_jour;
    }
    public function getId(){ return $this->id;}
    public function getInter(){ return $this->intervenant;}
    public function getTitre(){ return $this->titre; }
    public function getResume(){ return $this->resume;}
    public function getLieu(){ return $this->lieu;}
    public function getDate(){ return $this->date; }
    public function getDateJour(){ return $this->date_mise;}

    public function setId(int $id_as){$this->id = $id_as; }
    public function setInter(int $id_it){$this->intervenant = $id_it; }
    public function setTitre(string $titre){ $this->titre = $titre;}
    public function setResume(string $resume){$this->resume = $resume; }
    public function setLieu(string $lieu){$this->lieu = $lieu; }
    public function setDate(string $date_int){ $this->date = $date_int;}
    public function setDateJour(string $date_mise_jour){$this->date_mise = $date_mise_jour; }
}