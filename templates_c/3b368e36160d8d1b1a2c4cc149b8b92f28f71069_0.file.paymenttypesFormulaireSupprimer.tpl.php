<?php
/* Smarty version 4.3.4, created on 2024-11-13 10:16:15
  from '/Applications/MAMP/htdocs/hotels/mod_paymenttypes/vue/paymenttypesFormulaireSupprimer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_67347c6f949408_32276587',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3b368e36160d8d1b1a2c4cc149b8b92f28f71069' => 
    array (
      0 => '/Applications/MAMP/htdocs/hotels/mod_paymenttypes/vue/paymenttypesFormulaireSupprimer.tpl',
      1 => 1731492964,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public/left.tpl' => 1,
    'file:public/header.tpl' => 1,
  ),
),false)) {
function content_67347c6f949408_32276587 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Confirmer la suppression</strong>
                            </div>
                            <div class="card-body">
                                <p>Êtes-vous sûr de vouloir supprimer le mode de paiement suivant ?</p>
                                <p><strong>ID :</strong> <?php echo $_smarty_tpl->tpl_vars['paymenttype']->value->getPayment();?>
</p>
                                <p><strong>Description :</strong> <?php echo $_smarty_tpl->tpl_vars['paymenttype']->value->getDescription();?>
</p>
                                
                                <form action="index.php" method="post">
                                    <input type="hidden" name="gestion" value="paymenttypes">
                                    <input type="hidden" name="action" value="supprimer">
                                    <input type="hidden" name="Payment" value="<?php echo $_smarty_tpl->tpl_vars['paymenttype']->value->getPayment();?>
">
                                    
                                    <button type="submit" class="btn btn-danger">Confirmer la suppression</button>
                                    <a href="index.php?gestion=paymenttypes" class="btn btn-secondary">Annuler</a>
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
 src="public/assets/js/popper.min.js"><?php echo '</script'; ?>
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
