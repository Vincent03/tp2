<?php
namespace App\Table;
use Core\Table\Table;

/**
*class pour la table utilisateur**/

class ClientTable extends Table
{
    public function all(){
        return $this->query("SELECT clients.id,
                            clients.nom,
                            clients.prenom,
                            clients.adresse,
                            clients.date_de_naissance,
                            clients.code_postale,
                            clients.numero_de_telephone,
                            statuts_maritals.statut as statuts_maritals
                            FROM clients
                            LEFT JOIN statuts_maritals
                            ON statutMarital_id = statuts_maritals.id");
    }
    public function allBystatuts_maritals($id){
        return $this->query("SELECT clients.id,
                            clients.nom,
                            clients.prenom,
                            clients.adresse,
                            clients.date_de_naissance,
                            clients.code_postale,
                            clients.numero_de_numero_de_telephone,
                            statuts_maritals.statut as statuts_maritals
                            FROM clients
                            LEFT JOIN statuts_maritals
                            ON statutMarital_id = statuts_maritals.id
                            WHERE statuts_maritals.id = ?",
                             [$id]);
    }

    public function findClient($id)
    {
        return $this->query(" SELECT clients.id,
                                     clients.prenom,
                                     clients.nom,
                                     clients.date_de_naissance,
                                     clients.adresse,
                                     clients.code_postale,
                                     clients.numero_de_telephone,
                                     statuts_maritals.statut as statut
                                FROM clients
                                LEFT JOIN statuts_maritals
                                       ON clients.statutMarital_id = statuts_maritals.id
                                WHERE clients.id = ?
                            ", [$id], true);
    }
}