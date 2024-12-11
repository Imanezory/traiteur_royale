<?php 
namespace App\Models;

use CodeIgniter\Model;

class PlatModel extends Model
{
    protected $table = 'plats';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nom','description', 'prix', 'image', 'disponibilite'];
 
}
