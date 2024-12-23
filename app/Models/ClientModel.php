<?php

namespace App\Models;

use CodeIgniter\Model;

class ClientModel extends Model
{
    protected $table = 'clients'; 
    protected $primaryKey = 'id';
    protected $allowedFields = ['nom', 'prenom', 'email', 'telephone', 'adresse', 'mot_de_passe'];
}
