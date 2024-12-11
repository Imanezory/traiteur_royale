<?php

namespace App\Controllers;

use App\Models\ClientModel;
use App\Models\AdminModel;

class Connexion extends BaseController
{
    public function index()
    {
        return view('connecter');
    }

    public function login()
    {
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

    
        $AdminModel = new AdminModel();
        $admin = $AdminModel->where('email', $email)->first();

        if ($admin && $admin['mot_de_passe'] === $password) {
         
            session()->set('logged_in', true);
            session()->set('user', $admin);
            session()->set('role', 'admin');
            return view('panel');
        }

        $ClientModel = new ClientModel();
        $client = $ClientModel->where('email', $email)->first();

        if ($client && $client['mot_de_passe'] === $password) {
            session()->set('logged_in', true);
            session()->set('user', $client);
            session()->set('role', 'client');
            return redirect()->to(base_url('acceuil'));
        }
        
        $alerte = 'Email ou mot de passe incorrect.';
        return view('connecter', ['alerte' => $alerte]);
        
    }

    public function deconnecter()
    {
        session()->destroy();
        return redirect()->to(base_url('acceuil'));
    }
}
