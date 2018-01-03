<?php
/* Smarty version 3.1.30, created on 2018-01-03 22:44:53
  from "C:\xampp2\htdocs\CPWEB\templates\layout\page.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a4d4ed5383308_98351212',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0d8d0cc03e3841e7676fb7bd2d554ca9e5e1e6ba' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\CPWEB\\templates\\layout\\page.html',
      1 => 1515015675,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a4d4ed5383308_98351212 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11275369955a4d4ed5374848_46975283', 'styles');
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2663687795a4d4ed5379b62_44341929', 'script');
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11354171855a4d4ed537ba75_96964962', 'title');
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5652692105a4d4ed537d3b1_42265773', 'icon');
?>

    </head>
    <body class="cuerpo">
        <div id="wrapper">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19113938645a4d4ed537ed85_81139156', 'header');
?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_626027205a4d4ed5380c12_92741736', 'content');
?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18995365985a4d4ed5382680_75132594', 'footer');
?>

        </div>
    </body>
</html><?php }
/* {block 'styles'} */
class Block_11275369955a4d4ed5374848_46975283 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <link rel="stylesheet" type="text/css" href="<?php echo @constant('CSS');?>
publico.css">
            <link rel="stylesheet" type="text/css" href="<?php echo @constant('CSS');?>
fonts/style.css">
            <link rel="stylesheet" type="text/css" href="<?php echo @constant('CSS');?>
bootstrap/bootstrap.css">
        <?php
}
}
/* {/block 'styles'} */
/* {block 'script'} */
class Block_2663687795a4d4ed5379b62_44341929 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo '<script'; ?>
 src="<?php echo @constant('JS');?>
jquery.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 src="<?php echo @constant('JS');?>
bootstrap/bootstrap.min.js"><?php echo '</script'; ?>
>
        <?php
}
}
/* {/block 'script'} */
/* {block 'title'} */
class Block_11354171855a4d4ed537ba75_96964962 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
PLANTILLA GENERICA<?php
}
}
/* {/block 'title'} */
/* {block 'icon'} */
class Block_5652692105a4d4ed537d3b1_42265773 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'icon'} */
/* {block 'header'} */
class Block_19113938645a4d4ed537ed85_81139156 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'header'} */
/* {block 'content'} */
class Block_626027205a4d4ed5380c12_92741736 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_18995365985a4d4ed5382680_75132594 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'footer'} */
}
