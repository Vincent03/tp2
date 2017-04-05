<h2>Liste des clients</h2>
<p><a href="admin.php?p=clients.add">Ajouter un client</a></p>

<table class="table table-bordered text-center col-md-12">
    <thead>
        <tr>
            <th>Nom, prénom</th>
            <th>âge</th>
            <th>adresse</th>
            <th>numero de téléphone</th>
            <th>statut marital</th>
            <th>Options</th>
        </tr>
    </thead>
    <tbody>
        
  

<?php foreach (App::getInstance()->getTable("Client")->all() as $client): ?>
    <tr>
        <td><?= $client->identite ?></td>
        <td><?= $client->age ?></td>
        <td><?= $client->adresse.' '.$client->code_postale ?></td>
        <td><?= $client->numero_de_telephone ?></td>
        <td><?= $client->statuts_maritals ?></td>

       <td>
          <a class="btn btn-info btn-xs" href="admin.php?p=clients.info&id=<?= $client->id ?>"> Détail </a>
        </td>
    </tr>


<?php endforeach; ?>
    </tbody>
</table>