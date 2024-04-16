<?php

class GalleriController 
{
    public function galleriHttps()
    {
        $galleriMdl = new GalleriModele;
        $intermdl = new IntervenantModele;

        if(isset($_GET['action']))
        {
            $action = $_GET['action'];

            switch($action)
            {
                case "galleries":
                    $galleries = $galleriMdl->gelleries();
                    $this->render("galleri/", ["galleries" =>$galleries]);
                    break;
                
                case "gallerie":

                    $galleries = $galleriMdl->getPhotoByIntervenant($_GET['id']);
                    echo $_GET['id'];
                    // $this->render("galleri/index", ["galleries" =>$galleries]);
                    // break;
                
                case "ajouter_photo":
                    if(isset($_POST['photo']))
                    {
                        
                        
                        
                        $img_non = $_FILES['image'];
                        $tp_nom = $_FILES['image']['tmp_name'];
                        $time = time();
                        $nouveau_nom_img = $time.".".pathinfo($_FILES['image']['name'])['extension'];
                        $deplacer_img = move_uploaded_file($_FILES['image']['tmp_name'], "public/img_db/".$nouveau_nom_img);
                        if($deplacer_img)
                        {
                            $gale = new Gallerie(0,$_GET['id'],$nouveau_nom_img);
                            $galleriMdl->create($gale);

                            header("location: .");
                            exit;
                        }

                        
                    }
                    
                    
                    $this->render("galleri/new");
                    break;

            }
        }
    }

    public function render($page, array $data = [])
    {
        extract($data);
        include_once "vues/". $page . ".php";
    }
}