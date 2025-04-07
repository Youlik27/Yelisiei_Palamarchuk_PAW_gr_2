<?php
/* Smarty version 5.4.2, created on 2025-04-05 17:48:40
  from 'file:C:\Programy\XAMPP\htdocs\pal\z04_obiektowość/app/calc_view.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_67f150d8b6e595_44345701',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '28664d7902cacb897f3f9d158b2c8f32b2f10883' => 
    array (
      0 => 'C:\\Programy\\XAMPP\\htdocs\\pal\\z04_obiektowość/app/calc_view.tpl',
      1 => 1743868119,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67f150d8b6e595_44345701 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Programy\\XAMPP\\htdocs\\pal\\z04_obiektowość\\app';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_28547652267f150d8b5e332_43237153', 'footer');
?>

<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_54712261067f150d8b60e90_89420029', 'banner');
?>

<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_183968366867f150d8b61709_32959520', 'content');
?>


<!-- Scripts -->
<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "../templates/main.tpl", $_smarty_current_dir);
}
/* {block 'footer'} */
class Block_28547652267f150d8b5e332_43237153 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Programy\\XAMPP\\htdocs\\pal\\z04_obiektowość\\app';
?>
przykładowa tresć stopki wpisana do szablonu głównego z szablonu kalkulatora<?php
}
}
/* {/block 'footer'} */
/* {block 'banner'} */
class Block_54712261067f150d8b60e90_89420029 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Programy\\XAMPP\\htdocs\\pal\\z04_obiektowość\\app';
?>

<section id="banner" class="major">
	<div class="inner">
		<header class="major">
			<h1><?php echo $_smarty_tpl->getValue('banner_title');?>
</h1>
		</header>
		<div class="content">
			<p><?php echo $_smarty_tpl->getValue('banner_description');?>
</p>
			<ul class="actions">
				<li><a href="#one" class="button next scrolly">Get Started</a></li>
			</ul>
		</div>
	</div>
</section>
<?php
}
}
/* {/block 'banner'} */
/* {block 'content'} */
class Block_183968366867f150d8b61709_32959520 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Programy\\XAMPP\\htdocs\\pal\\z04_obiektowość\\app';
?>

<div class="row gtr-50">
	<div class="col-12">
		<section id = "form-section" class="box">
			<form action="<?php echo $_smarty_tpl->getValue('conf')->app_url;?>
/app/calc.php#form-section" method="get"  class="gtr-uniform">
				<!-- Kwota kredytu -->
				<div class="row gtr-uniform">
					<div class="col-12">
						<div class="aln-center">
							<h3 class="icon solid fa-coins"> Kwota kredytu</h3>
						</div>
						<input type="text" name="credit_sum" id="id_credit_sum" class="alt" placeholder="Wpisz kwotę kredytu (np. 2000)" value="<?php echo (($tmp = $_smarty_tpl->getValue('form')->credit_sum ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
					</div>

					<!-- Stopa procentowa -->
					<div class="col-12">
						<div class="aln-center">
							<h3 class="icon solid fa-percent"> Stopa procentowa</h3>
						</div>
						<input type="text" name="percent" id="id_percent" class="alt" placeholder="Wpisz roczną stopę % (np. 5.5)" value="<?php echo (($tmp = $_smarty_tpl->getValue('form')->percent ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
" />
					</div>

					<!-- Okres kredytowania -->
					<div class="col-12">
						<div class="aln-center">
							<h3 class="icon solid fa-calendar-alt"> Okres kredytowania</h3>
						</div>
						<input type="text" name="installment_count" id="id_installment_count" class="alt" placeholder="Wpisz okres w miesiącach (np. 25)" value="<?php echo (($tmp = $_smarty_tpl->getValue('form')->installment_count ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
"/>
					</div>

					<!-- Przycisk -->
					<div class="col-12">
						<ul class="actions special">
							<li>
								<button type="submit" class="button icon solid fa-calculator primary large"> Oblicz ratę</button>
							</li>
						</ul>
					</div>
				</div>
			</form>
		</section>
	</div>
</div>
<?php if ($_smarty_tpl->getValue('msgs')->isError()) {?>
<h4>Wystąpiły błędy: </h4>
<ol class="err">
	<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('msgs')->getErrors(), 'err');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('err')->value) {
$foreach0DoElse = false;
?>
	<li><?php echo $_smarty_tpl->getValue('err');?>
</li>
	<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
</ol>
<?php }?>


<?php if ((null !== ($_smarty_tpl->getValue('res')->result ?? null))) {?>
<h4>Wynik</h4>
<p class="res">
	<?php echo $_smarty_tpl->getValue('res')->result;?>

</p>
<?php }
}
}
/* {/block 'content'} */
}
