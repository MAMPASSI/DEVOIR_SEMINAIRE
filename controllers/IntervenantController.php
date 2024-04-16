<?php

class IntervenantController
{
    public function interHttps()
    {
        $intermdl = new IntervenantModele;

        if(isset($_GET['action']))
        {
            $action = $_GET['action'];

            switch($action)
            {
                case "lires_inter":
                    $intervenants = $intermdl->LireInters();
                    $this->render("intervenant/index",[ "intervenants"=>$intervenants]);
                    break;

                case "inscription":
                    if(isset($_POST['user_creat']))
                    {
                        extract($_POST);

                        $inter = new Intervenant(0,$nom,$prenom,$affectation,$url);
                        $intermdl->create($inter);
                        header("location: ?action=lires_inter");
                        exit;

                    }
                    $this->render("intervenant/new");
                    break;
                    
                
                case "delete_inter":
                    $id = $_GET['id'];
                    $intermdl->delete($id);
                    header("location: ?action=lires_inter");
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