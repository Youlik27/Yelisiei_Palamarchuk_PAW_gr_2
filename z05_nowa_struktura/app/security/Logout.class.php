<?php
namespace app\security;

class Logout {

    public function process() {
        $this->destroySession();
        $this->redirectToLogin();
    }

    private function destroySession() {
        session_start();
        session_unset();
        session_destroy();
    }

    private function redirectToLogin() {
        global $conf;
        header("Location: ".$conf->app_url);
        exit();
    }
}