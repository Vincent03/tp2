<h2>Liste des clients</h2>


<table class="table table-bordered text-center col-md-12">
    <thead>
        <tr>
            <th>Nom Prénom</th>
            <th>Age</th>
            <th>Adresse, code postal</th>          
            <th>Numero de telephone</th>
            <th> Statut Marital</th>
           
        </tr>
    </thead>
    <tbody>
        
<?php foreach (App::getInstance()->getTable("Client")->all() as $client): ?>
    <tr>
        <th><?= $client->identite ?></th>
        <th><?= $client->age ?></th>
        <th><?= $client->adresse.' '.$client->code_postale ?></th>
        <th><?= $client->numero_de_telephone ?></th>
        <th><?= $client->statuts_maritals ?></th>
    </tr>
    </tbody>



<?php endforeach; ?>

</table>