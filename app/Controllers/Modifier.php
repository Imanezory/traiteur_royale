<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ClientModel;

class Modifier extends BaseController
{
    public function index(): string
    { 
       
        
        return view('modifier');
    }

    public function update()
    {

        $clientModel = new ClientModel();
        $id = session()->get('user')['id'];
        $currentEmail=session()->get('user')['email'];
        $data = [
            'nom' => $this->request->getPost('nom'),
            'prenom' => $this->request->getPost('prenom'),
            'email' => $this->request->getPost('email'),
            'telephone' => $this->request->getPost('telephone'),
            'adresse' => $this->request->getPost('adresse'),
            'mot_de_passe' =>$this->request->getPost('mot_de_passe')
        ];
        $validation = \Config\Services::validation();
        $rules = [
            'nom' => 'required|min_length[3]',
            'prenom' => 'required|min_length[3]',
            'email' => [
                'rules' => $currentEmail === $this->request->getPost('email') 
                    ? 'required|valid_email' 
                    : 'required|valid_email|is_unique[clients.email]',
                'errors' => [
                    'is_unique' => 'Cet email est déjà utilisé par un autre compte.'
                ]
            ],
            'telephone' => 'required|numeric|min_length[10]|max_length[15]',
            'adresse' => 'required|min_length[5]',
            'mot_de_passe' => 'required|min_length[6]'
        ];
        if (!$this->validate($rules)) {
            $alerte = \Config\Services::validation()->listErrors();
            return view('modifier', ['alerte' => $alerte]);
        }

        $clientModel->update($id, $data);
        $session = session();
        $session->set('user', $clientModel->find($id));
        $alerte = 'Informations mises à jour avec succès.';
            return view('modifier', ['alerte' => $alerte]);
    }
}
