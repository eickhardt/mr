<?php /* Smarty version Smarty-3.1.19, created on 2015-05-21 10:25:55
         compiled from "C:\xampp\htdocs\mr\admin\themes\default\template\controllers\modules\warning_module.tpl" */ ?>
<?php /*%%SmartyHeaderCode:725555d9693468725-20093443%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '318e71df3b18310677d1855a15336b7f4d5fea44' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mr\\admin\\themes\\default\\template\\controllers\\modules\\warning_module.tpl',
      1 => 1425640160,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '725555d9693468725-20093443',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_link' => 0,
    'text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_555d969351c258_26608229',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_555d969351c258_26608229')) {function content_555d969351c258_26608229($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module_link']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</a><?php }} ?>
