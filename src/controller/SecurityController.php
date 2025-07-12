<?php

namespace App\Controller;

use App\Core\Abstract\AbstractController;
use App\Core\Validator;
use App\Service\SecurityService;

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
}


