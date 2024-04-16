<?php

class Gallerie

{
    private int $id;
    private int $inter;
    private string $photo;

    public function __construct(int $id, int $inter, string $photo)
    {
        $this->id = $id;
        $this->intervenant = $inter;
        $this->img = $photo;
    }

    public function getId(){ return $this->id;}
    public function getIntervenatId(){ return  $this->intervenant;}
    public function getImg(){ return $this->img;}

    public function setId($id){$this->id = $id;}
    public function setIntervenatId($inter){ $this->intervenant = $inter;}
    public function setImg($photo){$this->img = $photo; }
}