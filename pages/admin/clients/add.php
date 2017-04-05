<?php
    $app = App::getInstance();

    if($_POST){
        if(!empty($_POST['first_name'] && $_POST['last_name'] && $_POST['birth_date'] && $_POST['adress'] && $_POST['postal_code'] && $_POST['phone'] && $_POST['statut'])){
            $res = $app->getTable('client')->create([
                                                    'nom'=>$_POST['first_name'],
                                                    'prenom'=>$_POST['last_name'],
                                                    'date_de_naissance'=>$_POST['birth_date'],
                                                    'adresse'=>$_POST['adress'],
                                                    'code_postale'=>$_POST['postal_code'],
                                                    'numero_de_telephone'=>$_POST['phone'],
                                                    'statutMarital_id'=>$_POST['statut']
                                                    ]);
            if($res){
                // message flash
                header('location: admin.php?p=clients.list');
            }
        }
    }
?>




<div class="row">

    <h1>Créer un utilisateur</h1>

    <hr class="my-separator">

    <form class="form-horizontal" method="post" action="admin.php?p=clients.add">

        <!-- NOM DE L'UTILISATEUR -->
        <div class="form-group">
            <label for="first_name" class="col-sm-1 control-label">Nom</label>
            <div class="col-sm-11">
                <input class="form-control" type="text" name="first_name" placeholder="Veuillez entrer un nom" required maxlength="50" />
            </div>
        </div>

        <!-- PRÉNOM DE L'UTILISATEUR -->
        <div class="form-group">
            <label for="last_name" class="col-sm-1 control-label">Prénom</label>
            <div class="col-sm-11">
                <input class="form-control" type="text" name="last_name" placeholder="Veuillez entrer un prénom" required maxlength="50" />
            </div>
        </div>

        <!-- DATE DE NAISSANCE DE L'UTILISATEUR -->
        <div class="form-group">
            <label for="birth_date" class="col-sm-1 control-label">Date de naissance</label>
            <div class="col-sm-11">
                <input class="form-control" type="date" name="birth_date" required />
            </div>
        </div>

        <!-- ADRESSE DE L'UTILISATEUR -->
        <div class="form-group">
            <label for="adress" class="col-sm-1 control-label">Adresse</label>
            <div class="col-sm-11">
                <input class="form-control" type="text" name="adress" placeholder="Veuillez entrer une adresse" required maxlength="100" />
            </div>
        </div>

        <!-- CODE POSTAL DE L'UTILISATEUR -->
        <div class="form-group">
            <label for="postal_code" class="col-sm-1 control-label">Code postal</label>
            <div class="col-sm-11">
                <input class="form-control" type="text" name="postal_code" placeholder="Veuillez entrer un code postal" required maxlength="5" />
            </div>
        </div>

        <!-- TÉLÉPHONE DE L'UTILISATEUR -->
        <div class="form-group">
            <label for="phone" class="col-sm-1 control-label">Téléphone</label>
            <div class="col-sm-11">
                <input class="form-control" type="text" name="phone" placeholder="Veuillez entrer un numéro de téléphone" required maxlength="10" />
            </div>
        </div>

        <!-- SERVICE DE L'UTILISATEUR -->
        <div class="form-group">
            <label for="statut" class="col-sm-1 control-label">Situation</label>
            <div class="col-sm-11">
                <select class="form-control" name="statut">
                    <?php foreach(App::getInstance()->getTable('statuts_marital')->all() as $statut): ?>
                        <option value="<?= $statut->id ?>">
                            <?= $statut->statut ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>

        <!-- BOUTON SAUVEGARDER -->
        <div class="form-group">
            <div class="col-sm-offset-1 col-sm-11">
                <button type="submit" class="btn btn-info size">Ajouter</button>
            </div>
        </div>
    </form>

    <a href="admin.php" style="width:91.66666667%" class="btn btn-default pull-right" role="button">Retour</a>

    </br>
    </br>
    </br>
</div>