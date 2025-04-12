<?php
/* Smarty version 5.4.2, created on 2025-03-22 17:44:12
  from 'file:C:\Programy\XAMPP\htdocs\pal\z03_szablonowanie/app/security/login_view.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_67dee8dc25f5a8_98518773',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c85b3d315d82bae608ae3193f2defa6996e2f5a6' => 
    array (
      0 => 'C:\\Programy\\XAMPP\\htdocs\\pal\\z03_szablonowanie/app/security/login_view.tpl',
      1 => 1742655897,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67dee8dc25f5a8_98518773 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Programy\\XAMPP\\htdocs\\pal\\z03_szablonowanie\\app\\security';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_108055914367dee8dc22f375_90858877', 'footer');
?>

<!-- Wrapper -->
<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_121772695667dee8dc238d50_27677199', 'content');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "../../templates/main.tpl", $_smarty_current_dir);
}
/* {block 'footer'} */
class Block_108055914367dee8dc22f375_90858877 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Programy\\XAMPP\\htdocs\\pal\\z03_szablonowanie\\app\\security';
?>
przykładowa tresć stopki wpisana do szablonu głównego z szablonu kalkulatora<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_121772695667dee8dc238d50_27677199 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Programy\\XAMPP\\htdocs\\pal\\z03_szablonowanie\\app\\security';
?>

<div id="wrapper">
        <!-- One -->
        <section id="one">
            <div class="inner">
                <header class="major">
                    <h1>Login</h1>
                </header>

                <form action="<?php echo $_smarty_tpl->getValue('app_url');?>
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

<?php if ((null !== ($_smarty_tpl->getValue('messages') ?? null))) {
if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('messages')) > 0) {?>
<div class="err">
    <h4 class="icon solid fa-exclamation-triangle"> Wystąpiły błędy:</h4>
    <ul>
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('messages'), 'msg');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('msg')->value) {
$foreach0DoElse = false;
?>
        <li><?php echo $_smarty_tpl->getValue('msg');?>
</li>
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
    </ul>
</div>
<?php }
}?>

<?php
}
}
/* {/block 'content'} */
}
