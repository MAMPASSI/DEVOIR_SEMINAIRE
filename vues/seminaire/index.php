<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<section class="section">
        <h3>liste de tous les intervenants</h3>
        <table class="table table-striped m-5">
            <tr class="table-dark">

                <th>intervenant</th>

                <th>Titre</th>

                <th>Resume</th>

                <th>Lieu</th>
                <th>action</th>
            </tr>
            <?php foreach($seminaires as $intervenant){?>
                    
                <tr>
                    <td ><a href="detail_inter.php?id=<?= $intervenant->getId()?>"><?= $intervenant->getInter()?></a></td>
                        
                        
                    <td ><?= $intervenant->getTitre()?></td>
                    
                        
                    <td ><?= $intervenant->getResume()?>  </td>
            
            
                    <td ><a href="<?= $intervenant->getLieu()?>" target="_blank"><?= $intervenant->getLieu()?></a></td>
                    <td>
                        <a href="#">mod</a>
                        <a href="?action=delete_seminaire&id=<?= $intervenant->getId()?>">sup</a>
                    </td>
                </tr>
                    
            <?php }?>

        </table>

    </section>
    
</body>
</html>