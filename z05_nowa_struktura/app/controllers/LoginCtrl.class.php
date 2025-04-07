<?php
namespace app\controllers;

use app\security\Logout;
use app\security\CheckLogin;
use core\Messages;

class LoginCtrl {
    private $msgs;
    private $form;
    private $role;

    public function __construct() {
        $this->msgs = new Messages();
        $this->logout = new Logout();
        $this->form = array('login' => null, 'pass' => null);
        $this->role = getFromRequest('role');
    }

    private function getParams() {
        $this->form['login'] = getFromRequest('login');
        $this->form['pass'] = getFromRequest('pass');
    }

    public function logout() {
        $this->logout->process();
    }

    private function validate() {
        if (!(isset($this->form['login']) && isset($this->form['pass']))) {
            return false;
        }

        if ($this->form['login'] == "") {
            $this->msgs->addError('Nie podano loginu');
        }
        if ($this->form['pass'] == "") {
            $this->msgs->addError('Nie podano hasła');
        }

        if ($this->msgs->isError()) {
            return false;
        }

        if ($this->form['login'] == "admin" && $this->form['pass'] == "admin") {
            $_SESSION['role'] = 'admin';
            return true;
        }
        if ($this->form['login'] == "user" && $this->form['pass'] == "user") {
            $_SESSION['role'] = 'user';
            return true;
        }

        $this->msgs->addError('Niepoprawny login lub hasło');
        return false;
    }

    public function process() {
        global $conf;
        $this->getParams();

        if (!$this->validate()) {
            $this->generateView();
        } else {
            header("Location: ".$conf->action_root."calcCompute");
            exit();
        }
    }

    public function generateView() {
        global $conf;
        getSmarty()->assign('page_title','Logowanie');
        getSmarty()->assign('page_description','Proszę się zalogować');
        getSmarty()->assign('page_header','System logowania');

        getSmarty()->assign('form', $this->form);
        getSmarty()->assign('msgs', $this->msgs);
        getSmarty()->assign('role', $this->role);

        getSmarty()->display($conf->root_path.'/app/views/login_view.tpl');
    }
}