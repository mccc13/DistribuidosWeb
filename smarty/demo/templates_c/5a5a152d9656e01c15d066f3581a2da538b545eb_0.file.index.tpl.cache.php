<?php
/* Smarty version 3.1.31-dev/1, created on 2017-10-16 06:52:20
  from "C:\xampp\htdocs\DistribuidosWeb\smarty\demo\templates\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31-dev/1',
  'unifunc' => 'content_59e43b0425cc26_69357503',
  'has_nocache_code' => true,
  'file_dependency' => 
  array (
    '5a5a152d9656e01c15d066f3581a2da538b545eb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\DistribuidosWeb\\smarty\\demo\\templates\\index.tpl',
      1 => 1470607030,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_59e43b0425cc26_69357503 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_capitalize')) require_once 'C:\\xampp\\htdocs\\DistribuidosWeb\\smarty\\libs\\plugins\\modifier.capitalize.php';
if (!is_callable('smarty_modifier_date_format')) require_once 'C:\\xampp\\htdocs\\DistribuidosWeb\\smarty\\libs\\plugins\\modifier.date_format.php';
if (!is_callable('smarty_function_html_select_date')) require_once 'C:\\xampp\\htdocs\\DistribuidosWeb\\smarty\\libs\\plugins\\function.html_select_date.php';
if (!is_callable('smarty_function_html_select_time')) require_once 'C:\\xampp\\htdocs\\DistribuidosWeb\\smarty\\libs\\plugins\\function.html_select_time.php';
if (!is_callable('smarty_function_html_options')) require_once 'C:\\xampp\\htdocs\\DistribuidosWeb\\smarty\\libs\\plugins\\function.html_options.php';
$_smarty_tpl->compiled->nocache_hash = '174878010359e43b03c3d097_52929933';
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "test.conf", "setup", 0);
?>

<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0, false);
?>


<PRE>


    <?php if ($_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'bold')) {?><b><?php }?>
        
        Title: <?php echo smarty_modifier_capitalize($_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'title'));?>

        <?php if ($_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'bold')) {?></b><?php }?>

    The current date and time is <?php echo smarty_modifier_date_format(time(),"%Y-%m-%d %H:%M:%S");?>


    The value of global assigned variable $SCRIPT_NAME is <?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>


    Example of accessing server environment variable SERVER_NAME: <?php echo $_SERVER['SERVER_NAME'];?>


    The value of {$Name} is <b><?php echo '/*%%SmartyNocache:174878010359e43b03c3d097_52929933%%*/<?php echo $_smarty_tpl->tpl_vars[\'Name\']->value;?>
/*/%%SmartyNocache:174878010359e43b03c3d097_52929933%%*/';?>
</b>

variable modifier example of {$Name|upper}

<b><?php echo '/*%%SmartyNocache:174878010359e43b03c3d097_52929933%%*/<?php echo mb_strtoupper($_smarty_tpl->tpl_vars[\'Name\']->value, \'UTF-8\');?>
/*/%%SmartyNocache:174878010359e43b03c3d097_52929933%%*/';?>
</b>


An example of a section loop:

    <?php
$__section_outer_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_outer']) ? $_smarty_tpl->tpl_vars['__smarty_section_outer'] : false;
$__section_outer_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['FirstName']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_outer_0_total = $__section_outer_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_outer'] = new Smarty_Variable(array());
if ($__section_outer_0_total != 0) {
for ($__section_outer_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_outer']->value['index'] = 0; $__section_outer_0_iteration <= $__section_outer_0_total; $__section_outer_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_outer']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_outer']->value['rownum'] = $__section_outer_0_iteration;
?>
        <?php if ((1 & (isset($_smarty_tpl->tpl_vars['__smarty_section_outer']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_outer']->value['index'] : null) / 2)) {?>
            <?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_outer']->value['rownum']) ? $_smarty_tpl->tpl_vars['__smarty_section_outer']->value['rownum'] : null);?>
 . <?php echo $_smarty_tpl->tpl_vars['FirstName']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_outer']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_outer']->value['index'] : null)];?>
 <?php echo $_smarty_tpl->tpl_vars['LastName']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_outer']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_outer']->value['index'] : null)];?>

        <?php } else { ?>
            <?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_outer']->value['rownum']) ? $_smarty_tpl->tpl_vars['__smarty_section_outer']->value['rownum'] : null);?>
 * <?php echo $_smarty_tpl->tpl_vars['FirstName']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_outer']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_outer']->value['index'] : null)];?>
 <?php echo $_smarty_tpl->tpl_vars['LastName']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_outer']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_outer']->value['index'] : null)];?>

        <?php }?>
        <?php }} else {
 ?>
        none
    <?php
}
if ($__section_outer_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_outer'] = $__section_outer_0_saved;
}
?>

    An example of section looped key values:

    <?php
$__section_sec1_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1'] : false;
$__section_sec1_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['contacts']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_sec1_1_total = $__section_sec1_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_sec1'] = new Smarty_Variable(array());
if ($__section_sec1_1_total != 0) {
for ($__section_sec1_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] = 0; $__section_sec1_1_iteration <= $__section_sec1_1_total; $__section_sec1_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']++){
?>
        phone: <?php echo $_smarty_tpl->tpl_vars['contacts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['phone'];?>

        <br>

            fax: <?php echo $_smarty_tpl->tpl_vars['contacts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['fax'];?>

        <br>

            cell: <?php echo $_smarty_tpl->tpl_vars['contacts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['cell'];?>

        <br>
    <?php
}
}
if ($__section_sec1_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_sec1'] = $__section_sec1_1_saved;
}
?>
    <p>

        testing strip tags
        <table border=0><tr><td><A HREF="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
"><font color="red">This is a test </font></A></td></tr></table>

</PRE>

This is an example of the html_select_date function:

<form>
    <?php echo smarty_function_html_select_date(array('start_year'=>1998,'end_year'=>2010),$_smarty_tpl);?>

</form>

This is an example of the html_select_time function:

<form>
    <?php echo smarty_function_html_select_time(array('use_24_hours'=>false),$_smarty_tpl);?>

</form>

This is an example of the html_options function:

<form>
    <select name=states>
        <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['option_values']->value,'selected'=>$_smarty_tpl->tpl_vars['option_selected']->value,'output'=>$_smarty_tpl->tpl_vars['option_output']->value),$_smarty_tpl);?>

    </select>
</form>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
