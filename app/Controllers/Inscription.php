<?php

namespace App\Controllers;

use App\Models\ClientModel;
class Inscription extends BaseController
{
    public function index()
    {
     
        return view('inscription');
    }

    public function add()
    {
       
        $ClientModel = new ClientModel();
        $alerte = '';
        $validation = \Config\Services::validation();
        $rules = [
            'nom' => 'required|min_length[3]',
            'prenom' => 'required|min_length[3]',
            'email' => 'required|valid_email|is_unique[clients.email]',
            'telephone' => 'required|numeric|min_length[10]|max_length[15]',
            'adresse' => 'required|min_length[5]',
            'mot_de_passe' => 'required|min_length[6]'
        ];
        if (!$this->validate($rules)) {
            $alerte = \Config\Services::validation()->listErrors();
            return view('inscription', ['alerte' => $alerte]);
        }

      
        $nom = $this->request->getPost('nom');
        $prenom = $this->request->getPost('prenom');
        $email = $this->request->getPost('email');
        $telephone = $this->request->getPost('telephone');
        $adresse = $this->request->getPost('adresse');
        $mot_de_passe = $this->request->getPost('mot_de_passe');

       
        $ClientModel->insert([
            'nom' => $nom,
            'prenom' => $prenom,
            'email' => $email,
            'telephone' => $telephone,
            'adresse' => $adresse,
            'mot_de_passe' => $mot_de_passe
        ]);
        
    
        $alerte = 'Inscription réussie! Vous pouvez maintenant vous connecter.';
        
        return view('connecter', ['alerte' => $alerte]);
        
    
    }
}
