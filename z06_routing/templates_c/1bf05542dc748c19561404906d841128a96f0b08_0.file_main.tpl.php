<?php
/* Smarty version 5.4.2, created on 2025-04-06 14:42:03
  from 'file:main.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_67f2769b50ecd6_80620937',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1bf05542dc748c19561404906d841128a96f0b08' => 
    array (
      0 => 'main.tpl',
      1 => 1743943133,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67f2769b50ecd6_80620937 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Programy\\XAMPP\\htdocs\\pal\\z05_nowa_struktura\\app\\views\\templates';
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
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_142486861367f2769b5021d9_82967281', 'banner');
?>


  <!-- Menu -->
  <nav id="menu">
    <ul class="links">
      <li><a href="<?php echo $_smarty_tpl->getValue('conf')->app_url;?>
/index.php">Home</a></li>
    </ul>
    <ul class="actions stacked">
      <li><a href="<?php echo $_smarty_tpl->getValue('conf')->action_root;?>
logout" class="button primary fit">Log out</a></li>
    </ul>
  </nav>

  <!-- Main Content -->
  <div id="main" class="alt">
    <section id="one">
      <div class="inner">
    <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_41375029167f2769b50cbc3_19249791', 'content');
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
class Block_142486861367f2769b5021d9_82967281 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Programy\\XAMPP\\htdocs\\pal\\z05_nowa_struktura\\app\\views\\templates';
}
}
/* {/block 'banner'} */
/* {block 'content'} */
class Block_41375029167f2769b50cbc3_19249791 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Programy\\XAMPP\\htdocs\\pal\\z05_nowa_struktura\\app\\views\\templates';
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'content'} */
}
