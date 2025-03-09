<?php
// KONTROLER strony kalkulatora
require_once dirname(__FILE__).'/../config.php';

// W kontrolerze niczego nie wysyła się do klienta.
// Wysłaniem odpowiedzi zajmie się odpowiedni widok.
// Parametry do widoku przekazujemy przez zmienne.

// 1. pobranie parametrów

$credit_sum = $_REQUEST ['credit_sum'];
$percent = $_REQUEST ['percent'];
$installment_count = $_REQUEST ['installment_count'];


$credit_sum = str_replace(',', '.', $credit_sum);
$percent = str_replace(',', '.', $percent);
// 2. walidacja parametrów z przygotowaniem zmiennych dla widoku

if (!(isset($credit_sum) && isset($percent) && isset($installment_count))) {
    // sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
    $messages[] = 'Błędne wywołanie aplikacji. Brak jednego z parametrów.';
}

// sprawdzenie, czy parametry są puste i dodanie odpowiednich komunikatów
if ($credit_sum == "") {
    $messages[] = 'Nie podano kwoty kredytu';
} elseif ($credit_sum < 0) {
    $messages[] = 'Kwota kredytu powinna być dodatnia';
}

if ($percent == "") {
    $messages[] = 'Nie podano stopnia oprocentowania';
} elseif ($percent < 0) {
    $messages[] = 'Oprocentowanie powinno być dodatnie';
}

if ($installment_count == "") {
    $messages[] = 'Nie podano liczby rat miesięcznych';
} elseif ($installment_count < 0) {
    $messages[] = 'Liczba rat miesięcznych powinna być dodatnia';
}

// nie ma sensu walidować dalej gdy brak parametrów
if (empty($messages)) {

    // sprawdzenie, czy $credit_sum, $percent i $installment_count są liczbami
    if (!is_numeric($credit_sum)) {
        $messages[] = 'Kwota kredytu nie jest liczbą';
    }

    if (!is_numeric($percent)) {
        $messages[] = 'Oprocentowanie nie jest liczbą';
    }

    if (!is_numeric($installment_count)) {
        $messages[] = 'Liczba rat miesięcznych nie jest liczbą';
    }
}

// 3. wykonaj zadanie jeśli wszystko w porządku
if (empty($messages)) { // gdy brak błędów

    // konwersja parametrów na float/int
    $credit_sum = floatval($credit_sum);
    $percent_converted = floatval($percent) / 100 / 12;
    $installment_count = intval($installment_count);

    // wykonanie operacji
    $result = $credit_sum * ($percent_converted * pow(1 + $percent_converted, $installment_count)) / (pow(1 + $percent_converted, $installment_count) - 1);
    $result = round($result, 2);
}
// 4. Wywołanie widoku z przekazaniem zmiennych
// - zainicjowane zmienne ($messages,$x,$y,$operation,$result)
//   będą dostępne w dołączonym skrypcie
include 'calc_view.php';