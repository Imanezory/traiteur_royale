<?php

namespace App\Models;

use CodeIgniter\Model;

class DetailCommandeModel extends Model
{
    protected $table = 'details_commandes';
    protected $primaryKey = 'id';
    protected $allowedFields = ['commande_id', 'plat_id', 'quantite', 'prix_unitaire'];
}
