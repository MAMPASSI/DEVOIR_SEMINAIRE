<?php

class SeminaireModele extends Modele 
{
    public function LireSeminaires()
    {
        $stmt = $this->getAll("seminaire");

        $tab = [];

        while($res = $stmt->fetch()){
            extract($res);
            
            $tab[] = new Seminaire($id_as, $id_it, $Titre_int, $Resumé_int, $lieu, $date_int, $date_mise_jour);
        }

        return $tab;
    }


    public function lireInter(int $id){
        $stmt = $this->getOne("seminaire", $id);
        extract($stmt->fetch());

        return new Seminaire($id_as, $id_it, $titre, $resume, $lieu, $date_int, $date_mise_jour);
    }

    public function getById()
    {
        $stmt = $this->getAll("intervenant");

        $intervenants = [];

        while($res = $stmt->fetch())
        {
            extract($res);
            $intervenant = new Intervenant($id,$nom,$prenom,$affectation,$url);
            $intervenants [] = $intervenant;
            


        }
        return $intervenants;
    }

    public function create($semi)
    {
        $sql = "INSERT INTO seminaire VALUES(NULL, :id_int,:titre, :resume, :lieu, :date_int, :mise_jour)";
        $this->executerReq($sql, [
            "id_int" =>$semi->getInter(),
            "titre"=> $semi->getTitre(),
            "resume" => $semi->getResume(),
            "lieu" => $semi->getLieu(),
            "date_int" => $semi->getDate(),
            "mise_jour" =>$semi->getDateJour()
        ]);

    }

    public function delete(int $id){
        $stmt = $this->executerReq("DELETE FROM seminaire WHERE id_as = :id", ["id" => $id]);
    }

    public function update($user){
        $query = "UPDATE seminaire SET adresse = :adr, code_postal = :cp, ville = :ville  WHERE id = :id";
        $this->executerReq($query, [
            "adr" => $user->getAdresse(),
            "cp"   => $user->getCp(),
            "ville" => $user->getVille(),
            "id"    => $user->getId()
        ]);
    }

}