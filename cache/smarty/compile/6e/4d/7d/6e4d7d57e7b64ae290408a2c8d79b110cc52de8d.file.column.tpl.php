<?php /* Smarty version Smarty-3.1.19, created on 2016-04-02 00:16:24
         compiled from "/home/koomaakiey/pprod/modules/paypal/views/templates/hook/column.tpl" */ ?>
<?php /*%%SmartyHeaderCode:149504585756fef338c56436-06074820%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6e4d7d57e7b64ae290408a2c8d79b110cc52de8d' => 
    array (
      0 => '/home/koomaakiey/pprod/modules/paypal/views/templates/hook/column.tpl',
      1 => 1446752846,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '149504585756fef338c56436-06074820',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'base_dir_ssl' => 0,
    'logo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56fef338c60016_36989338',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56fef338c60016_36989338')) {function content_56fef338c60016_36989338($_smarty_tpl) {?>

<div id="paypal-column-block">
	<p><a href="<?php echo $_smarty_tpl->tpl_vars['base_dir_ssl']->value;?>
modules/paypal/about.php" rel="nofollow"><img src="<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" alt="PayPal" title="<?php echo smartyTranslate(array('s'=>'Pay with PayPal','mod'=>'paypal'),$_smarty_tpl);?>
" style="max-width: 100%" /></a></p>
</div>
<?php }} ?>
