<?php
/* Smarty version 3.1.30, created on 2025-04-17 17:14:36
  from "C:\Programy\XAMPP\htdocs\pal\z07_bazy_danych\app\views\PersonEdit.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_68011adcd1ee39_77455371',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '283fc3bc281b8fe4635778fb8ef01ab054f51be6' => 
    array (
      0 => 'C:\\Programy\\XAMPP\\htdocs\\pal\\z07_bazy_danych\\app\\views\\PersonEdit.tpl',
      1 => 1744902868,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
  ),
),false)) {
function content_68011adcd1ee39_77455371 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_48154427368011adcd1dfe9_82646070', 'top');
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'top'} */
class Block_48154427368011adcd1dfe9_82646070 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="bottom-margin">
<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
personSave" method="post" class="pure-form pure-form-aligned">
	<fieldset>
		<legend>Dane osoby</legend>
		<div class="pure-control-group">
            <label for="name">imię</label>
            <input id="name" type="text" placeholder="imię" name="name" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->name;?>
">
        </div>
		<div class="pure-control-group">
            <label for="surname">nazwisko</label>
            <input id="surname" type="text" placeholder="nazwisko" name="surname" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->surname;?>
">
        </div>
		<div class="pure-control-group">
            <label for="birthdate">data ur.</label>
            <input id="birthdate" type="text" placeholder="data ur." name="birthdate" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->birthdate;?>
">
        </div>
        <div class="pure-control-group">
            <label for="gender">płeć</label>
            <select id="gender" name="gender">
                <option value="mężczyzna" <?php if ($_smarty_tpl->tpl_vars['form']->value->gender == "mężczyzna") {?>selected<?php }?>>mężczyzna</option>
                <option value="kobieta" <?php if ($_smarty_tpl->tpl_vars['form']->value->gender == "kobieta") {?>selected<?php }?>>kobieta</option>
                <option value="inna" <?php if ($_smarty_tpl->tpl_vars['form']->value->gender == "inna") {?>selected<?php }?>>inna</option>
            </select>
        </div>
		<div class="pure-controls">
			<input type="submit" class="pure-button pure-button-primary" value="Zapisz"/>
			<a class="pure-button button-secondary" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
personList">Powrót</a>
		</div>
	</fieldset>
    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->id;?>
">
</form>	
</div>

<?php
}
}
/* {/block 'top'} */
}
