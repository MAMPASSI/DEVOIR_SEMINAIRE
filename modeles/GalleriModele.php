<?php

class GalleriModele extends Modele 
{
    public function create($gale)
    {
        $sql = "INSERT INTO gallerie VALUES(NULL, :intervenant, :photo)";
        
        $this->executerReq($sql, [
            "intervenant" =>$gale->getIntervenatId(),
            "photo"=> $gale->getImg(),
        ]);

    }

    public function getPhotoByIntervenant($id_int)
    {
        $sql = "SELECT photo
        FROM gallerie
        WHERE id_int = :intervenant";

        $reuette = $this->executerReq($sql, ["intervenant"=> $id_int]);

        $tab = [];

        while ($res = $reuette->fetch())
        {
            extract($res);

            $tab[] = new Gallerie($id,$id_int, $photo);
        }

        return $tab;


        

    }

    public function gelleries()
    {
        $stmt = $this->getAll("gallerie");

        $tab = [];

        while($res = $stmt->fetch()){
            extract($res);
            
            $tab[] = new Gallerie($id,$id_int, $photo);
        }

        return $tab;

    }

    public function delete(int $id){
        $stmt = $this->executerReq("DELETE FROM gallerie WHERE id = :id", ["id" => $id]);
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