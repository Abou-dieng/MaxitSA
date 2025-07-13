<?php

namespace App\Controller;

use App\Core\Abstract\AbstractController;
use App\Core\Validator;
use App\Service\SecurityService;
use App\Service\TwilioService;
use App\Entity\MessageEnum;

class SecurityController extends AbstractController
{

    // private SecurityService $securityService;

    public function __construct()
    {
        parent::__construct();
        // $this->securityService = new SecurityService();
        $this->layout = 'security';
    }

    public function create() {}

    public function store() {}

    public function show() {}
    public function edit() {}
    public function destroy() {}

    public function index()
    {
        // Logique pour afficher le formulaire de connexion
        $this->renderHtml('auth/login');
    }

    public function createAccount()
    {
        $this->renderHtml('auth/register');
    }

    public function login()
    {
        //traitement
        $formData = [
            'login' => trim($_POST['login'] ?? ''),
            'password' => trim($_POST['password'] ?? '')
        ];

        Validator::valide($formData['login'], 'login', ['required', 'senegal_phone']);
        Validator::valide($formData['password'], 'password', ['required']);

        if (!Validator::isValid()) {
            $this->session->set('flash_errors', Validator::getErrors());
            $this->session->set('old_input', $formData);
            header('Location: /');
            exit;
        }

        // Ici tu dois vérifier l'utilisateur en base (à faire à l'étape suivante)
        $userRepo = \App\Repository\UserRepository::getInstance();
        $user = $userRepo->findByTelephone($formData['login']);


        if (!$user || !password_verify($formData['password'], $user->getPassword())) {
            Validator::addError('global', 'login ou mot de passe incorrect.');
            $this->session->set('flash_errors', Validator::getErrors());
            $this->session->set('old_input', $formData);
            header('Location: /');
            exit;
        }
        $this->session->set('user', $user->toArray());
        error_log('connected user : ' . $this->session->get('user')['login']);
        header('Location: /client/dashboard');
        exit;
    }

    public function logout()
    {
        // detruire session
        $this->session->destroy();
        header('Location: /');
    }

    public function register()
    {
        $formData = [
            'nom' => trim($_POST['nom'] ?? ''),
            'prenom' => trim($_POST['prenom'] ?? ''),
            'adresse' => trim($_POST['adresse'] ?? ''),
            'login' => trim($_POST['login'] ?? ''),
            'password' => trim($_POST['password'] ?? ''),
            'numero_carte_identite' => trim($_POST['numero_carte_identite'] ?? ''),
            // Ajoute les autres champs si besoin
        ];

        // Validation
        Validator::valide($formData['nom'], 'nom', ['required']);
        Validator::valide($formData['prenom'], 'prenom', ['required']);
        Validator::valide($formData['adresse'], 'adresse', ['required']);
        Validator::valide($formData['login'], 'login', ['required', 'senegal_phone']);
        Validator::valide($formData['password'], 'password', ['required', 'min:6']);
        Validator::valide($formData['numero_carte_identite'], 'numero_carte_identite', ['required']);

        // Vérifie unicité login (numéro) et CNI
        $userRepo = \App\Repository\UserRepository::getInstance();
        if ($userRepo->findByTelephone($formData['login'])) {
            Validator::addError('login', 'Ce numéro existe déjà.');
        }
        // Ajoute une méthode findByCni si besoin

        if (!Validator::isValid()) {
            $this->session->set('flash_errors', Validator::getErrors());
            $this->session->set('flash_formData', $formData);
            header('Location: /account/create');
            exit;
        }

        // Hash du mot de passe
        $formData['password'] = password_hash($formData['password'], PASSWORD_DEFAULT);

        $photoRecto = '';
        $photoVerso = '';
        $uploadDir = __DIR__ . '/../../public/uploads/';

        if (isset($_FILES['photo_recto']) && $_FILES['photo_recto']['error'] === UPLOAD_ERR_OK) {
            $ext = pathinfo($_FILES['photo_recto']['name'], PATHINFO_EXTENSION);
            $photoRecto = uniqid('recto_') . '.' . $ext;
            move_uploaded_file($_FILES['photo_recto']['tmp_name'], $uploadDir . $photoRecto);
        }

        if (isset($_FILES['photo_verso']) && $_FILES['photo_verso']['error'] === UPLOAD_ERR_OK) {
            $ext = pathinfo($_FILES['photo_verso']['name'], PATHINFO_EXTENSION);
            $photoVerso = uniqid('verso_') . '.' . $ext;
            move_uploaded_file($_FILES['photo_verso']['tmp_name'], $uploadDir . $photoVerso);
        }

        $formData['photo_recto'] = $photoRecto;
        $formData['photo_verso'] = $photoVerso;
        $formData['typeuser_id'] = 1; // ou 2 selon le type (1 = client, 2 = autre)

        // Insertion en base
        $userRepo->insert($formData);

        $twilio = new TwilioService();
        $twilio->sendSms(
            $formData['login'], // numéro de téléphone
            MessageEnum::INSCRIPTION->value
        );

        // Redirection ou message de succès
        $this->session->set('flash_success', 'Compte créé avec succès. Connectez-vous.');
        header('Location: /');
        exit;
    }
}



