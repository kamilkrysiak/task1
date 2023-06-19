<?php
/* Smarty version 3.1.39, created on 2023-06-19 11:58:38
  from 'C:\Users\kkrysiak\Desktop\task_01-master\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_649026cee3bf05_94173381',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '64ffe15fae028f5f3875e4108905853c2a194614' => 
    array (
      0 => 'C:\\Users\\kkrysiak\\Desktop\\task_01-master\\templates\\index.tpl',
      1 => 1687168718,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_649026cee3bf05_94173381 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 01 - Webmaster</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/tiny-slider.css">
    <link rel="stylesheet" href="/css/theme.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>

<body>
    <div id="app">
        <div class="container">
       <div class="gallery">
            <h3>Best sellers</h3>
             <ul class="control" id="custom-control">
                <li class="prev">
                    <img src="../images/prev.svg" />                        
                </li>
                <li class="next">
                    <img src="../images/next.svg" /> 
                </li>
            </ul>
            <div class="my-slider">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                <div class="card">
                    <div class="card-image">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['product']->value['img_url'];?>
" />
                    </div>
                    <p class="card-name"><?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
</p>
                    <div class="card-prices">
                        <?php if ($_smarty_tpl->tpl_vars['product']->value['specific_price']) {?> 
                        <span class="card-price-reduced"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>((string)$_smarty_tpl->tpl_vars['product']->value['price'])),$_smarty_tpl ) );?>
</span>
                        <span class="card-price-old"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>((string)$_smarty_tpl->tpl_vars['product']->value['specific_price']['priceWithoutReduction'])),$_smarty_tpl ) );?>
</span>
                        <?php } else { ?> 
                        <span class="card-price"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>((string)$_smarty_tpl->tpl_vars['product']->value['price'])),$_smarty_tpl ) );?>
</span>
                        <?php }?>
                    </div>
                </div>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>     
            </div>
       </div>
    </div>
    </div> 

    <?php echo '<script'; ?>
 src="/js/jquery-3.6.0.slim.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/js/tiny-slider.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/js/theme.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
    var slider = tns({
        container: ".my-slider",
        items: 4,
        gutter: 20,
        slideBy: 1,
        controlsPosition: "bottom",
        navPosition: "bottom",
        mouseDrag: true,
        autoplay: true,
        autoplayButtonOutput: false,
        controlsContainer: "#custom-control",
        });
    <?php echo '</script'; ?>
>
</body>

</html><?php }
}
