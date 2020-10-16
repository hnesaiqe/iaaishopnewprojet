<?php
/* Smarty version 3.1.33, created on 2020-10-16 08:50:03
  from 'C:\xampp\htdocs\iaaishopnewprojet\iaaishop\admin643ginmol\themes\new-theme\template\components\layout\information_messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f89429b1dbcc1_70336787',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fcfc9ac755fb1f659b2d908532f8bb3f17c95447' => 
    array (
      0 => 'C:\\xampp\\htdocs\\iaaishopnewprojet\\iaaishop\\admin643ginmol\\themes\\new-theme\\template\\components\\layout\\information_messages.tpl',
      1 => 1602828747,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f89429b1dbcc1_70336787 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['informations']->value) && count($_smarty_tpl->tpl_vars['informations']->value) && $_smarty_tpl->tpl_vars['informations']->value) {?>
  <div class="bootstrap">
    <div class="alert alert-info">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <ul id="infos_block" class="list-unstyled">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['informations']->value, 'info');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['info']->value) {
?>
          <li><?php echo $_smarty_tpl->tpl_vars['info']->value;?>
</li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </ul>
    </div>
  </div>
<?php }
}
}
