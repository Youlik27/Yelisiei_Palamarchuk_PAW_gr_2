<?php

use Smarty\Smarty;

require_once dirname(__FILE__).'/../../config.php';
require_once $conf->root_path.'/lib/smarty/libs/Smarty.class.php';
require_once $conf->root_path.'/lib/Messages.class.php';

class LoginCtrl {
    private $msgs;
    private $form;
    private $role;

    public function __construct() {
        $this->msgs = new Messages();
        $this->form = array('login' => null, 'pass' => null);
        $this->role = isset($_SESSION['role']) ? $_SESSION['role'] : null;
    }

    private function getParams() {
        $this->form['login'] = isset($_REQUEST['login']) ? $_REQUEST['login'] : null;
        $this->form['pass'] = isset($_REQUEST['pass']) ? $_REQUEST['pass'] : null;
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
            session_start();
            $_SESSION['role'] = 'admin';
            return true;
        }
        if ($this->form['login'] == "user" && $this->form['pass'] == "user") {
            session_start();
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
            header("Location: ".$conf->app_url);
        }
    }

    public function generateView() {
        global $conf;

        $smarty = new Smarty();
        $smarty->assign('conf', $conf);
        $smarty->assign('app_url', $conf->app_url);
        $smarty->assign('root_path', $conf->root_path);
        $smarty->assign('page_title','Kalkulator kredytowy');
        $smarty->assign('page_description','Profesjonalne szablonowanie oparte na bibliotece Smarty');
        $smarty->assign('page_header','Szablony Smarty');

        $smarty->assign('form', $this->form);
        $smarty->assign('msgs', $this->msgs);
        $smarty->assign('role', $this->role);

        $smarty->display($conf->root_path.'/app/security/login_view.html');
    }
}