<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<form action="" method="post" class="container-fluid">
        <h2>Créer  un Seminaire</h2>
        <input type="hidden" name="id" class="form-control">
        <div class="mb-3">
            <label for="" class="form-label">Intervenant</label>
            
            <select name="id_it" >


                <?php foreach($inter as $objet){ ?>
                        
                    <option value="<?= $objet->getId() ?>"><?= $objet->getNom() ?></option>
                <?php } ?>

            </select>
            
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Titre</label>
            <input type="text" name="titre"  class="form-control">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Résumer</label>
            <input type="text" name="resume"  class="form-control">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Lieu</label>
            <input type="text" name="lieu"  class="form-control">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Date</label>
            <input type="date" name="date_int"  class="form-control">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Date De Mise à Jour</label>
            <input type="date" name="date_mise_jour"  class="form-control">
        </div>

        



        <input type="submit" name="seminaire_creat" class="btn btn-primary">
    </form>

    
</body>
    
</body>
</html>