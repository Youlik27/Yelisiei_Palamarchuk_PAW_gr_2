<?php
/* Smarty version 5.4.2, created on 2025-03-22 11:57:16
  from 'file:C:\Programy\XAMPP\htdocs\pal\z03_szablonowanie\app\security\../../templates/main.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_67de978c254354_78946139',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dd5c47128e533f71a1ad0ab66a460ea09937882d' => 
    array (
      0 => 'C:\\Programy\\XAMPP\\htdocs\\pal\\z03_szablonowanie\\app\\security\\../../templates/main.tpl',
      1 => 1742641009,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67de978c254354_78946139 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Programy\\XAMPP\\htdocs\\pal\\z03_szablonowanie\\templates';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, false);
?>
<!doctype html>
<html lang="pl">
<head>
  <title><?php echo (($tmp = $_smarty_tpl->getValue('page_title') ?? null)===null||$tmp==='' ? "Tytuł domyślny" ?? null : $tmp);?>
</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?php echo (($tmp = $_smarty_tpl->getValue('page_description') ?? null)===null||$tmp==='' ? "Opis domyślny" ?? null : $tmp);?>
">
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->getValue('app_url');?>
/assets/css/main.css" />
  <noscript><link rel="stylesheet" href="<?php echo $_smarty_tpl->getValue('app_url');?>
/assets/css/noscript.css" /></noscript>
</head>
<body class="is-preload">
<div id="wrapper">
  <!-- Header -->
  <header id="header">
    <a href="<?php echo $_smarty_tpl->getValue('app_url');?>
/index.php" class="logo"><strong>Kalkulator kredytowy</strong></a>
    <nav>
      <a href="#menu">Menu</a>
    </nav>
  </header>
  <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_89164822967de978c244799_40075189', 'banner');
?>


  <!-- Menu -->
  <nav id="menu">
    <ul class="links">
      <li><a href="<?php echo $_smarty_tpl->getValue('app_url');?>
/index.php">Home</a></li>
    </ul>
    <ul class="actions stacked">
      <li><a href="<?php echo $_smarty_tpl->getValue('app_url');?>
/app/security/logout.php" class="button primary fit">Log out</a></li>
    </ul>
  </nav>

  <!-- Main Content -->
  <div id="main" class="alt">
    <section id="one">
      <div class="inner">
    <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_5759034167de978c253052_12015662', 'content');
?>

    </section>
    </div>

  <!-- Footer -->
  <footer id="footer">
    <div class="inner">
      <ul class="copyright">
        <li>&copy; Yelisiei Palamarchuk</li>
        <li>Design: <a href="https://html5up.net">HTML5 UP</a></li>
      </ul>
    </div>
  </footer>
</div>
</div>
<!-- Scripts -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('app_url');?>
/assets/js/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('app_url');?>
/assets/js/jquery.scrolly.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('app_url');?>
/assets/js/jquery.scrollex.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('app_url');?>
/assets/js/browser.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('app_url');?>
/assets/js/breakpoints.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('app_url');?>
/assets/js/util.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('app_url');?>
/assets/js/main.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
/* {block 'banner'} */
class Block_89164822967de978c244799_40075189 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Programy\\XAMPP\\htdocs\\pal\\z03_szablonowanie\\templates';
}
}
/* {/block 'banner'} */
/* {block 'content'} */
class Block_5759034167de978c253052_12015662 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Programy\\XAMPP\\htdocs\\pal\\z03_szablonowanie\\templates';
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'content'} */
}
