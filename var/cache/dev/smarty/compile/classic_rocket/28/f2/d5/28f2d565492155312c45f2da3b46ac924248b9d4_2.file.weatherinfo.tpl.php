<?php
/* Smarty version 3.1.48, created on 2023-08-17 12:42:35
  from 'C:\laragon\www\prueba-tienda-prestashop\modules\weatherinfo\views\templates\hook\weatherinfo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_64de5c0b7f4cd4_88287780',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '28f2d565492155312c45f2da3b46ac924248b9d4' => 
    array (
      0 => 'C:\\laragon\\www\\prueba-tienda-prestashop\\modules\\weatherinfo\\views\\templates\\hook\\weatherinfo.tpl',
      1 => 1692214409,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64de5c0b7f4cd4_88287780 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['weatherData']->value))) {?>
    <link rel="stylesheet" type="text/css" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module_dir']->value, ENT_QUOTES, 'UTF-8');?>
/views/css/weatherinfo.css">
    <div class="weather-info">
        <p class="weather-data">Ubicación: <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['weatherData']->value['location'], ENT_QUOTES, 'UTF-8');?>
</span></p>
        <p class="weather-data">Temperatura en Celsius: <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['weatherData']->value['temperatureCelsius'], ENT_QUOTES, 'UTF-8');?>
 °C</span></p>
        <p class="weather-data">Temperatura en Fahrenheit: <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['weatherData']->value['temperatureF'], ENT_QUOTES, 'UTF-8');?>
 °F</span></p>
        <p class="weather-data">Humedad: <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['weatherData']->value['humidity'], ENT_QUOTES, 'UTF-8');?>
 %</span></p>
    </div>
<?php }?>

<?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.6.0.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module_dir']->value, ENT_QUOTES, 'UTF-8');?>
/views/js/weatherinfo.js"><?php echo '</script'; ?>
>
<?php }
}
