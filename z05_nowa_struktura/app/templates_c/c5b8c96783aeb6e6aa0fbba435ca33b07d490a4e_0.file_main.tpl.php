<?php
/* Smarty version 5.4.2, created on 2025-04-05 17:49:17
  from 'file:C:\Programy\XAMPP\htdocs\pal\z04_obiektowość\app\../templates/main.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_67f150fd23c8f2_22261727',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c5b8c96783aeb6e6aa0fbba435ca33b07d490a4e' => 
    array (
      0 => 'C:\\Programy\\XAMPP\\htdocs\\pal\\z04_obiektowość\\app\\../templates/main.tpl',
      1 => 1743247152,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67f150fd23c8f2_22261727 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Programy\\XAMPP\\htdocs\\pal\\z04_obiektowość\\templates';
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
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->getValue('conf')->app_url;?>
/assets/css/main.css" />
  <noscript><link rel="stylesheet" href="<?php echo $_smarty_tpl->getValue('conf')->app_url;?>
/assets/css/noscript.css" /></noscript>
</head>
<body class="is-preload">
<div id="wrapper">
  <!-- Header -->
  <header id="header">
    <a href="<?php echo $_smarty_tpl->getValue('conf')->app_url;?>
/index.php" class="logo"><strong>Kalkulator kredytowy</strong></a>
    <nav>
      <a href="#menu">Menu</a>
    </nav>
  </header>
  <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_154084847567f150fd2397f0_84530905', 'banner');
?>


  <!-- Menu -->
  <nav id="menu">
    <ul class="links">
      <li><a href="<?php echo $_smarty_tpl->getValue('conf')->app_url;?>
/index.php">Home</a></li>
    </ul>
    <ul class="actions stacked">
      <li><a href="<?php echo $_smarty_tpl->getValue('conf')->app_url;?>
/app/security/logout.php" class="button primary fit">Log out</a></li>
    </ul>
  </nav>

  <!-- Main Content -->
  <div id="main" class="alt">
    <section id="one">
      <div class="inner">
    <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_109456648367f150fd23ad65_88500366', 'content');
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
 src="<?php echo $_smarty_tpl->getValue('conf')->app_url;?>
/assets/js/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('conf')->app_url;?>
/assets/js/jquery.scrolly.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('conf')->app_url;?>
/assets/js/jquery.scrollex.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('conf')->app_url;?>
/assets/js/browser.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('conf')->app_url;?>
/assets/js/breakpoints.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('conf')->app_url;?>
/assets/js/util.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('conf')->app_url;?>
/assets/js/main.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
/* {block 'banner'} */
class Block_154084847567f150fd2397f0_84530905 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Programy\\XAMPP\\htdocs\\pal\\z04_obiektowość\\templates';
}
}
/* {/block 'banner'} */
/* {block 'content'} */
class Block_109456648367f150fd23ad65_88500366 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Programy\\XAMPP\\htdocs\\pal\\z04_obiektowość\\templates';
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'content'} */
}
