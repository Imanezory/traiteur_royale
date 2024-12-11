<?php 
namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $table = 'administrateurs';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nom','email', 'mot_de_passe'];
}
