<?php
namespace app\security;

use app\controllers\LoginCtrl;

class checkLogin {

    public function __construct() {
        $this->startSession();
    }

    private function startSession() {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
    }

    public function checkAccess() {
        $role = $_SESSION['role'] ?? '';
        if (empty($role)) {
            $this->redirectToLogin();
        }
        return $role;
    }

    private function redirectToLogin() {
        $loginController = new LoginCtrl();
        $loginController->process();
        exit();
    }
}