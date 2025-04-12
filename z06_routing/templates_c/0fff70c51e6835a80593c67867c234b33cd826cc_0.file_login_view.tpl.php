<?php
/* Smarty version 5.4.2, created on 2025-04-06 21:52:03
  from 'file:C:\Programy\XAMPP\htdocs\pal\z05_nowa_struktura/app/views/login_view.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_67f2db63ed1868_38331671',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0fff70c51e6835a80593c67867c234b33cd826cc' => 
    array (
      0 => 'C:\\Programy\\XAMPP\\htdocs\\pal\\z05_nowa_struktura/app/views/login_view.tpl',
      1 => 1743969120,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67f2db63ed1868_38331671 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Programy\\XAMPP\\htdocs\\pal\\z05_nowa_struktura\\app\\views';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_175291749367f2db63ec0d05_84905850', 'footer');
?>

<!-- Wrapper -->
<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_30618319367f2db63ec5369_83972884', 'content');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "main.tpl", $_smarty_current_dir);
}
/* {block 'footer'} */
class Block_175291749367f2db63ec0d05_84905850 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Programy\\XAMPP\\htdocs\\pal\\z05_nowa_struktura\\app\\views';
?>
przykładowa tresć stopki wpisana do szablonu głównego z szablonu kalkulatora<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_30618319367f2db63ec5369_83972884 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Programy\\XAMPP\\htdocs\\pal\\z05_nowa_struktura\\app\\views';
?>

<div id="wrapper">
        <!-- One -->
        <section id="one">
            <div class="inner">
                <header class="major">
                    <h1>Login</h1>
                </header>

                <form action="<?php echo $_smarty_tpl->getValue('conf')->action_root;?>
checkLogin" method="post">
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
