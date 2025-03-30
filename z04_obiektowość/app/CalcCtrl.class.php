<?php

use app\CalcResult;
use Smarty\Smarty;

require_once $conf->root_path.'/lib/smarty/libs/Smarty.class.php';
require_once $conf->root_path.'/lib/Messages.class.php';
require_once $conf->root_path.'/app/CalcForm.class.php';
require_once $conf->root_path.'/app/CalcResult.class.php';

class CalcCtrl {
    private $msgs;
    private $form;
    private $result;
    private $role;

    public function __construct(){
        $this->msgs = new Messages();
        $this->form = new CalcForm();
        $this->result = new CalcResult();
        $this->role = isset($_SESSION['role']) ? $_SESSION['role'] : 'user';
    }

    public function getParams(){
        $this->form->credit_sum = isset($_REQUEST['credit_sum']) ? $_REQUEST['credit_sum'] : null;
        $this->form->percent = isset($_REQUEST['percent']) ? $_REQUEST['percent'] : null;
        $this->form->installment_count = isset($_REQUEST['installment_count']) ? $_REQUEST['installment_count'] : null;
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
        global $conf;

        $smarty = new Smarty();
        $smarty->assign('conf', $conf);
        $smarty->assign('page_title','Kalkulator kredytowy');
        $smarty->assign('page_description','Profesjonalne szablonowanie oparte na bibliotece Smarty');
        $smarty->assign('page_header','Szablony Smarty');
        $smarty->assign('banner_title', 'Kalkulator kredytowy');
        $smarty->assign('banner_description', 'Oblicz miesięczną ratę kredytu.');

        $smarty->assign('form', $this->form);
        $smarty->assign('res', $this->result);
        $smarty->assign('msgs', $this->msgs);
        $smarty->assign('role', $this->role);

        $smarty->display($conf->root_path.'/app/calc.html');
    }
}