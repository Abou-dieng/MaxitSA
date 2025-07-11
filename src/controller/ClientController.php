<?php

namespace App\Controller;

use App\Core\Abstract\AbstractController;
use App\Core\Session;

class ClientController extends AbstractController {

     protected Session $session;

    public function create() {}
    public function store() {}
    public function show() {}
    public function edit() {}
    public function destroy() {}

    public function __construct() 
    {
        parent::__construct();
        $this->session = Session::getInstance();
    }

    public function index() {
        $this->renderHtml('client/dashboard');
    }

    public function listTransactons() {
        $this->renderHtml('client/listTransactions');
    }

}