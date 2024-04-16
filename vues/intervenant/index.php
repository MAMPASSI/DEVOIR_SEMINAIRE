
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <header>
        <a href="#" class="logo"><i class="fas fa-infinity"></i>Tp.</a>
        <nav class="navbar">
             <a class="active" href="#">Acceuil</a>
             <a href="#">admin</a>
             
        </nav>
        
    </header>

    <section class="section">
        <h3>liste de tous les intervenants</h3>
        <table class="table table-striped m-5">
            <tr class="table-dark">

                <th>nom</th>

                <th>prenom</th>

                <th>affectation</th>

                <th>url</th>
                <th>photo</th>
                <th>Action</th>
            </tr>
            <?php foreach($intervenants as $intervenant){?>
                    
                <tr>
                    <td ><a href="?action=gallerie&id=<?= $intervenant->getId()?>"><?= $intervenant->getNom()?></a></td>
                        
                        
                    <td ><?= $intervenant->getPrenom()?></td>
                    
                        
                    <td ><?= $intervenant->getAffectation()?>  </td>
            
            
                    <td ><a href="<?= $intervenant->getUrl()?>" target="_blank"><?= $intervenant->getUrl()?></a></td>
                    <td><a href="?action=ajouter_photo&id=<?= $intervenant->getId()?>">ajouter une photo</a></td>
                    <td >
                        <a href="#" target="_blank">mod</a>
                        <a href="?action=delete_inter&id=<?= $intervenant->getId()?>" >supprimer</a>
                    </td>
                </tr>
                    
            <?php }?>

        </table>

    </section>

    



    
</body>
</html>