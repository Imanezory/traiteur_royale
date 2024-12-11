<?php

namespace App\Controllers;

use App\Models\CommandeModel;
use App\Models\ClientModel;
use App\Models\DetailCommandeModel;
use App\Models\PlatModel;
use CodeIgniter\I18n\Time;

class Commande extends BaseController
{
    public function confirmer()
    {
        $session = session();

        $user = $session->get('user');
        $clientId = isset($user['id']) ? $user['id'] : null;
        
        if (!$clientId) {
            $alerte = "Il faut se connecter pour passer une commande.";
            return view('connecter', ['alerte' => $alerte]);
        }
        
        $platId = $this->request->getPost('plat_id');
        $quantite = $this->request->getPost('quantite');


        $platModel = new PlatModel();
        $plat = $platModel->find($platId);
        if (!$plat) {
            return redirect()->to(base_url('plats'));
        }

        $prixUnitaire = $plat['prix'];
        $commandeModel = new CommandeModel();
        $commandeId = $commandeModel->insert([
            'client_id' => $clientId,
            'date_commande' => Time::now(),
            'total' => $quantite * $prixUnitaire,
        ]);

       
        $detailCommandeModel = new DetailCommandeModel();
        $detailCommandeModel->insert([
            'commande_id' => $commandeId,
            'plat_id' => $platId,
            'quantite' => $quantite,
            'prix_unitaire' => $prixUnitaire,
        ]);

        $commandes = $commandeModel->where('client_id', $clientId)->findAll();
        return view('commandes', ['commandes' => $commandes]);
    }
    public function index(){
        $session = session();
        $clientId = $session->get('user')['id'];
        $commandeModel = new CommandeModel();
        $commandes = $commandeModel->where('client_id', $clientId)->findAll();
        return view('commandes', ['commandes' => $commandes]);
    }
}
