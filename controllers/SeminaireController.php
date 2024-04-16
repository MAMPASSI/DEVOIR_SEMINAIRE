<?php

class SeminaireController 
{
    public function seminaireHttps()
    {
        $seminairemdl = new SeminaireModele;
        $intermdl = new IntervenantModele;

        if(isset($_GET['action']))
        {
            $action = $_GET['action'];

            switch($action)
            {
                case "admin":
                    $seminaires = $seminairemdl->LireSeminaires();
                    $this->render("seminaire/index", ["seminaires" => $seminaires]);
                    break;
                
                case "ajout":
                    if(isset($_POST['seminaire_creat']))
                    {
                        extract($_POST);
                        $semi = new Seminaire(0, $id_it, $titre, $resume, $lieu, $date_int, $date_mise_jour);
                        $seminairemdl->create($semi);
                        header("location: ?action=admin");
                        exit;



                    }

                    $interv = $seminairemdl->getById();
                    

                    $this->render("seminaire/new", ["inter" => $interv]);
                
                    break;
                
                case "delete_seminaire":
                    $id = $_GET['id'];
                    $seminairemdl->delete($id);
                    header("location: ?action=admin");
                    exit;

            }

        }

    }

    public function render($page, array $data = [])
    {
        extract($data);
        include_once "vues/". $page . ".php";
    }
}