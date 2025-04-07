<?php

namespace app\controllers;
use app\transfer\CalcResult;
use app\forms\CalcForm;
use core\Messages;
use app\security\CheckLogin;

class CalcCtrl {
    private $form;
    private $result;
    private $role;

    public function __construct(){
        $this->msgs = new Messages();
        $this->form = new CalcForm();
        $this->result = new CalcResult();
        $this->checkLogin = new CheckLogin();
        $this->role = isset($_SESSION['role']) ? $_SESSION['role'] : 'user';
    }

    public function getParams(){
        $this->form->credit_sum = getFromRequest("credit_sum");
        $this->form->percent = getFromRequest("percent");
        $this->form->installment_count = getFromRequest("installment_count");
    }

    public function validate() {
        $this->form->credit_sum = str_replace(',', '.', $this->form->credit_sum);
        $this->form->percent = str_replace(',', '.', $this->form->percent);

        if (!(isset($this->form->credit_sum) && isset($this->form->percent) && isset($this->form->installment_count))) {
            return false;
        }

        if ($this->form->credit_sum == "") {
            $this->msgs->addError('Nie podano kwoty kredytu');
        } elseif ($this->form->credit_sum < 0) {
            $this->msgs->addError('Kwota kredytu powinna być dodatnia');
        }

        if ($this->form->percent == "") {
            $this->msgs->addError('Nie podano stopnia oprocentowania');
        } elseif ($this->form->percent < 0) {
            $this->msgs->addError('Oprocentowanie powinno być dodatnie');
        }

        if ($this->form->installment_count == "") {
            $this->msgs->addError('Nie podano liczby rat miesięcznych');
        } elseif ($this->form->installment_count < 0) {
            $this->msgs->addError('Liczba rat miesięcznych powinna być dodatnia');
        }

        if (!$this->msgs->isError()) {
            if (!is_numeric($this->form->credit_sum)) {
                $this->msgs->addError('Kwota kredytu nie jest liczbą');
            }
            if (!is_numeric($this->form->percent)) {
                $this->msgs->addError('Oprocentowanie nie jest liczbą');
            }
            if (!is_numeric($this->form->installment_count)) {
                $this->msgs->addError('Liczba rat miesięcznych nie jest liczbą');
            }
        }

        return !$this->msgs->isError();
    }
    public function process(){
        $this->getParams();
        $this->checkLogin->checkAccess();
        if ($this->validate()) {
            $credit_sum = floatval($this->form->credit_sum);
            $percent = floatval($this->form->percent) / 100 / 12;
            $installment_count = intval($this->form->installment_count);

            if ($this->role == 'user' && $credit_sum > 30000) {
                $this->msgs->addError('Tylko administrator może używać kalkulatora dla sumy większej niż 30 000.');
            } else {
                $this->result->result = $credit_sum * ($percent * pow(1 + $percent, $installment_count))
                    / (pow(1 + $percent, $installment_count) - 1);
                $this->result->result = round($this->result->result, 2);
                $this->msgs->addInfo('Obliczenia wykonane pomyślnie.');
            }
        }
        $this->generateView();
    }

    public function generateView(){
        getSmarty()->assign('page_title','Kalkulator kredytowy');
        getSmarty()->assign('page_description','Kolejne rozszerzenia dla aplikacja z jednym "punktem wejścia". Do nowej struktury dołożono automatyczne ładowanie klas wykorzystując w strukturze przestrzenie nazw.');
        getSmarty()->assign('page_header','Kontroler główny');
        getSmarty()->assign('banner_title','Kalkulator kredytowy');
        getSmarty()->assign('banner_description', 'Oblicz miesięczną ratę kredytu.');

        getSmarty()->assign('form', $this->form);
        getSmarty()->assign('res', $this->result);
        getSmarty()->assign('msgs', $this->msgs);
        getSmarty()->assign('role', $this->role);
        getSmarty()->assign('form',$this->form);
        getSmarty()->assign('res',$this->result);

        getSmarty()->display('calc_view.tpl');
    }
}