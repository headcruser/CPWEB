<?php
/* Smarty version 3.1.32-dev-38, created on 2018-01-03 23:24:42
  from 'C:\xampp2\htdocs\CPWEB\templates\layout\page.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-38',
  'unifunc' => 'content_5a4d582a444ee8_96681459',
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
function content_5a4d582a444ee8_96681459 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9869518485a4d582a423237_26807053', 'styles');
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9670348285a4d582a433c05_33127409', 'script');
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20822380195a4d582a43b0b9_98926632', 'title');
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13600752745a4d582a43c7b4_50469541', 'icon');
?>

    </head>
    <body class="cuerpo">
        <div id="wrapper">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9898887815a4d582a43dc98_17018825', 'header');
?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18044022865a4d582a441184_50064144', 'content');
?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16063062505a4d582a443b69_31151855', 'footer');
?>

        </div>
    </body>
</html><?php }
/* {block 'styles'} */
class Block_9869518485a4d582a423237_26807053 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'styles' => 
  array (
    0 => 'Block_9869518485a4d582a423237_26807053',
  ),
);
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
class Block_9670348285a4d582a433c05_33127409 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_9670348285a4d582a433c05_33127409',
  ),
);
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
class Block_20822380195a4d582a43b0b9_98926632 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_20822380195a4d582a43b0b9_98926632',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
PLANTILLA GENERICA<?php
}
}
/* {/block 'title'} */
/* {block 'icon'} */
class Block_13600752745a4d582a43c7b4_50469541 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'icon' => 
  array (
    0 => 'Block_13600752745a4d582a43c7b4_50469541',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'icon'} */
/* {block 'header'} */
class Block_9898887815a4d582a43dc98_17018825 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_9898887815a4d582a43dc98_17018825',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'header'} */
/* {block 'content'} */
class Block_18044022865a4d582a441184_50064144 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_18044022865a4d582a441184_50064144',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_16063062505a4d582a443b69_31151855 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_16063062505a4d582a443b69_31151855',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'footer'} */
}
