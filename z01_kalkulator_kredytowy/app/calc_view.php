<?php require_once dirname(__FILE__) .'/../config.php';?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
<meta charset="utf-8" />
<title>Kalkulator kredytowy</title>
</head>
<body>

<form action="<?php print(_APP_URL);?>/app/calc.php" method="get">
	<label for="id_credit_sum">Kwota kredytu:   </label>
	<input id="id_credit_sum" type="text" name="credit_sum"  value="<?php isset($credit_sum) ?print($credit_sum):""?>" /><br />
	<label for="id_percent">Stopa procentowa: </label>
	<input id="id_percent" type="text" name="percent" value="<?php isset($percent) ?print($percent):"" ?>" /><br />
    <label for="id_installment_count">Ilość rat miesięcznych: </label>
    <input id="id_installment_count" type="text" name="installment_count" value="<?php isset($installment_count) ?print($installment_count):"" ?>" /><br />
    <input type="submit" value="Obliczyć miesięczną ratę" />
</form>	

<?php
//wyświeltenie listy błędów, jeśli istnieją
if (isset($messages)) {
	if (count ( $messages ) > 0) {
		echo '<ol style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f4b1b1; width:300px;">';
		foreach ( $messages as $key => $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}
?>

<?php if (isset($result)){ ?>
<div style="margin: 20px; padding: 10px; border-radius: 5px; background-color: #ff0; width:300px;">
<?php echo 'Wynik: '.$result; ?>
</div>
<?php } ?>

</body>
</html>