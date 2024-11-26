<?php
/* Smarty version 4.3.4, created on 2024-11-13 08:48:20
  from '/Applications/MAMP/htdocs/hotels/mod_paymenttypes/vue/paymenttypesFormAjout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_673467d45d7842_35210103',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a3b28d0e4d9ab382b73978a61a8fe698952957ac' => 
    array (
      0 => '/Applications/MAMP/htdocs/hotels/mod_paymenttypes/vue/paymenttypesFormAjout.tpl',
      1 => 1731487639,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public/left.tpl' => 1,
    'file:public/header.tpl' => 1,
  ),
),false)) {
function content_673467d45d7842_35210103 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $_smarty_tpl->tpl_vars['titreVue']->value;?>
</title>
    <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['titreVue']->value;?>
">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="public/favicon.ico">
    <link rel="stylesheet" href="public/assets/css/normalize.css">
    <link rel="stylesheet" href="public/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="public/assets/scss/style.css">
</head>
<body>
    <?php $_smarty_tpl->_subTemplateRender('file:public/left.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    
    <div id="right-panel" class="right-panel">
        <?php $_smarty_tpl->_subTemplateRender('file:public/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        
        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header"><strong><?php echo $_smarty_tpl->tpl_vars['titrePage']->value;?>
</strong></div>
                            <div class="card-body card-block">
                                <form action="index.php" method="post">
                                    <input type="hidden" name="gestion" value="paymenttypes">
                                    <input type="hidden" name="action" value="ajouter">
                                    
                                    <div class="form-group">
                                        <label for="type">Type de paiement</label>
                                        <input type="text" id="type" name="type" class="form-control" required>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <input type="text" id="description" name="description" class="form-control" required>
                                    </div>
                                    
                                    <div class="form-actions form-group">
                                        <button type="submit" class="btn btn-primary btn-sm">Ajouter</button>
                                        <a href="index.php?gestion=paymenttypes" class="btn btn-secondary btn-sm">Retour</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php echo '<script'; ?>
 src="public/assets/js/vendor/jquery-2.1.4.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="public/assets/js/plugins.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="public/assets/js/main.js"><?php echo '</script'; ?>
>
</body>
</html> <?php }
}
