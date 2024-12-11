<?php

namespace App\Models;

use CodeIgniter\Model;

class CommandeModel extends Model
{
    protected $table = 'commandes';
    protected $primaryKey = 'id';
    protected $allowedFields = ['client_id', 'date_commande', 'total'];
    public function getCommandesWithDetails()
    {
        return $this->select('commandes.id, commandes.client_id, commandes.date_commande, commandes.total, ' .
                             'details_commandes.plat_id, details_commandes.quantite, details_commandes.prix_unitaire, ' .
                             'plats.nom AS nom_plat')
                    ->join('details_commandes', 'details_commandes.commande_id = commandes.id')
                    ->join('plats', 'plats.id = details_commandes.plat_id')
                    ->findAll();
    }
}
