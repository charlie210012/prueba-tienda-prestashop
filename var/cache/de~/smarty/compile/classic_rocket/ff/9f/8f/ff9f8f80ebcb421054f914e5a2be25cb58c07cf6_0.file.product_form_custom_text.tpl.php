<?php
/* Smarty version 3.1.48, created on 2023-08-17 12:42:19
  from 'C:\laragon\www\prueba-tienda-prestashop\modules\customproducttext\views\templates\admin\product_form_custom_text.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_64de5bfb6a7aa6_95634574',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ff9f8f80ebcb421054f914e5a2be25cb58c07cf6' => 
    array (
      0 => 'C:\\laragon\\www\\prueba-tienda-prestashop\\modules\\customproducttext\\views\\templates\\admin\\product_form_custom_text.tpl',
      1 => 1692294101,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64de5bfb6a7aa6_95634574 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="form-group">
    <label class="control-label col-lg-3" style="font-weight: bold;">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Texto personalizado','d'=>'Admin.Global'),$_smarty_tpl ) );?>

    </label>
    <div class="col-lg-9">
        <textarea class="form-control" name="custom_text" rows="5"><?php echo $_smarty_tpl->tpl_vars['productText']->value;?>
</textarea>
    </div>
</div>
<?php }
}
