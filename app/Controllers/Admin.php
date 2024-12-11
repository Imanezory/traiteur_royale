<?php

namespace App\Controllers;

use App\Models\PlatModel;
use App\Models\ClientModel;
use App\Models\CommandeModel;

class Admin extends BaseController
{
    public function insererPlat()
    {
   
        if (session('role') !== 'admin') {
            return redirect()->to(base_url('connecter'));
        }


        if ($this->request->getMethod() === 'POST') {
            $PlatModel = new PlatModel();

            $nom = $this->request->getPost('nom');
            $description = $this->request->getPost('description');
            $prix = $this->request->getPost('prix');
            $disponibilite = $this->request->getPost('disponibilite');
            $file = $this->request->getFile('image');

            if ($file && $file->isValid() && !$file->hasMoved()) {
                $newName = $file->getRandomName();
                $file->move(FCPATH . 'assets/images/plats', $newName);
                $imagePath = 'assets/images/plats/' . $newName;
            } else {
                $imagePath = null;
            }

            $PlatModel->insert([
                'nom' => $nom,
                'description' => $description,
                'prix' => $prix,
                'image' => $imagePath,
                'disponibilite' => $disponibilite,
            ]);

            $alerte = 'Plat ajouté avec succès !';
            return view('insererplat', ['alerte' => $alerte]);
        }


        return view('insererplat');
    }

    public function afficherClients()
    {
        $clientModel = new ClientModel();
        $clients = $clientModel->findAll();

        return view('afficher_clients', ['clients' => $clients]);
    }
    public function afficherCommandes()
    {
        $commandeModel = new CommandeModel();
    
        $commandes = $commandeModel->getCommandesWithDetails();
        return view('afficher_commandes', ['commandes' => $commandes]);
    }
    public function afficherPlats()
    {
       $platModel = new PlatModel();
        $plats =$platModel->findAll();

        return view('afficher_plats', ['plats' => $plats]);
    }

    public function modifierPlat($id)
{
    $platModel = new PlatModel();
    if ($this->request->getMethod() === 'POST') {

        $data = [
            'nom' => $this->request->getPost('nom'),
            'description' => $this->request->getPost('description'),
            'prix' => $this->request->getPost('prix'),
            'disponibilite' => $this->request->getPost('disponibilite') ? 1 : 0,
        ];

       
        $validation = \Config\Services::validation();
        $rules = [
            'nom' => 'required|min_length[3]',
            'description' => 'required|min_length[5]',
            'prix' => 'required|numeric',
            'disponibilite' => 'required|in_list[0,1]',
        ];
        if (!$this->validate($rules)) {
            $alerte = \Config\Services::validation()->listErrors();
            return view('modifierplat', ['alerte' => $alerte, 'plat' => $platModel->find($id)]);
        }
        $file = $this->request->getFile('image');
        if ($file && $file->isValid() && !$file->hasMoved()) {
            $newName = $file->getRandomName();
            $file->move(FCPATH . 'assets/images/plats', $newName);
            $data['image'] = 'assets/images/plats/' . $newName;
        } else {
            $plat = $platModel->find($id);
            $data['image'] = $plat['image'];
        }
        $platModel->update($id, $data);
        $alerte = 'Plat modifié avec succès !';

        return redirect()->to(base_url('afficher_plats'))->with('alerte', $alerte);
    }

    $plat = $platModel->find($id);
    return view('modifierplat', ['plat' => $plat]);
}

    
    


    public function supprimerClient($id)
    {
        $clientModel = new ClientModel();


        $client = $clientModel->find($id);
        if ($client) {
            $clientModel->delete($id);
            $alerte = 'Client supprimé avec succès!';
        } else {
            $alerte = 'Le client n\'a pas été trouvé!';
        }
        return redirect()->to(base_url('afficher_clients'))->with('alerte', $alerte);
    }
    public function supprimerPlat($id)
    {
        $platModel = new PlatModel();


        $plat = $platModel->find($id);
        if ($plat) {
            $platModel->delete($id);
            $alerte = 'Plat supprimé avec succès!';
        } else {
            $alerte = 'Le plat n\'a pas été trouvé!';
        }
        return redirect()->to(base_url('afficher_plats'))->with('alerte', $alerte);
    }


    public function ajoutClient()
    {
        if ($this->request->getMethod() === 'POST') {
    
            $ClientModel = new ClientModel();
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
                return view('ajout_client', [
                    'validation' => $this->validator
                ]);
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
           
            $alerte = 'Client avec succès !';
            return view('ajout_client', ['alerte' => $alerte]);
        }

        return view('ajout_client');
    }
    
}
