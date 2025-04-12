<?php
/* Smarty version 5.4.2, created on 2025-03-30 15:32:15
  from 'file:C:\Programy\XAMPP\htdocs\pal\z04_obiektowość/app/security/login_view.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_67e947df41d335_42211302',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b6c828a92a3fa385192eb0f3a2a71e2aeb5196b4' => 
    array (
      0 => 'C:\\Programy\\XAMPP\\htdocs\\pal\\z04_obiektowość/app/security/login_view.tpl',
      1 => 1743341527,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67e947df41d335_42211302 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Programy\\XAMPP\\htdocs\\pal\\z04_obiektowość\\app\\security';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_57381800367e947df40cf92_56788774', 'footer');
?>

<!-- Wrapper -->
<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_167167826867e947df4106e6_57309542', 'content');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "../../templates/main.tpl", $_smarty_current_dir);
}
/* {block 'footer'} */
class Block_57381800367e947df40cf92_56788774 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Programy\\XAMPP\\htdocs\\pal\\z04_obiektowość\\app\\security';
?>
przykładowa tresć stopki wpisana do szablonu głównego z szablonu kalkulatora<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_167167826867e947df4106e6_57309542 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Programy\\XAMPP\\htdocs\\pal\\z04_obiektowość\\app\\security';
?>

<div id="wrapper">
        <!-- One -->
        <section id="one">
            <div class="inner">
                <header class="major">
                    <h1>Login</h1>
                </header>

                <form action="<?php echo $_smarty_tpl->getValue('conf')->app_url;?>
/app/security/login.php" method="post">
                    <div class="fields">
                        <div class="field half">
                            <label for="id_login">login: </label>
                            <input id="id_login" type="text" name="login" value=""/>
                        </div>
                        <div class="field half">
                            <label for="id_pass">pass: </label>
                            <input id="id_pass" type="password" name="pass" />
                        </div>
                    </div>
                    <ul class="actions">
                        <li><input type="submit" value="zaloguj" class="primary"/></li>
                        <li><input type="reset" value="Zresetować" /></li>
                    </ul>
                </form>

            </div>
        </section>

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

<?php
}
}
/* {/block 'content'} */
}
