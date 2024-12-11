<?php


namespace App\Controllers;

use App\Models\PlatModel;

class Plats extends BaseController
{
    public function index()
    {
        $platModel = new PlatModel();
        $plats = $platModel->findAll();

        return view('plats', ['plats' => $plats]);
    }
    public function detail($id)
    {
        $platModel = new PlatModel();
        $plat = $platModel->find($id);
        if (!$plat) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Plat introuvable.");
        }
        return view('plat_details', ['plat' => $plat]);
    }
    
    
}
