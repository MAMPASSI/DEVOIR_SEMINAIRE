<?php

class IntervenantModele extends Modele
{
    public function create($inter)
    {
        $sql = "INSERT INTO intervenant VALUES(NULL, :nom,:prenom, :affectation, :url)";
        $this->executerReq($sql, [
            "nom" =>$inter->getNom(),
            "prenom"=> $inter->getPrenom(),
            "affectation" => $inter->getAffectation(),
            "url" => $inter->getUrl()
        ]);

    }

    public function LireInters()
    {
        $stmt = $this->getAll("intervenant");

        $tab = [];

        while($res = $stmt->fetch()){
            extract($res);
            
            $tab[] = new Intervenant($id, $nom, $prenom, $affectation, $url);
        }

        return $tab;
    }

    public function lireInter(int $id){
        $stmt = $this->getOne("intervenant", $id);
        extract($stmt->fetch());

        return new Intervenant($id,$nom,$prenom,$affectation,$url);
    }

    public function delete(int $id){
        $stmt = $this->executerReq("DELETE FROM intervenant WHERE id = :id", ["id" => $id]);
    }

    public function update($user){
        $query = "UPDATE client SET adresse = :adr, code_postal = :cp, ville = :ville  WHERE id = :id";
        $this->executerReq($query, [
            "adr" => $user->getAdresse(),
            "cp"   => $user->getCp(),
            "ville" => $user->getVille(),
            "id"    => $user->getId()
        ]);
    }
}