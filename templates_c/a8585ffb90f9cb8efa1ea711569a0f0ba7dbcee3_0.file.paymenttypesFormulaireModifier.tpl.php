<?php
/* Smarty version 4.3.4, created on 2024-11-13 10:38:12
  from '/Applications/MAMP/htdocs/hotels/mod_paymenttypes/vue/paymenttypesFormulaireModifier.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_673481941cd254_54021257',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a8585ffb90f9cb8efa1ea711569a0f0ba7dbcee3' => 
    array (
      0 => '/Applications/MAMP/htdocs/hotels/mod_paymenttypes/vue/paymenttypesFormulaireModifier.tpl',
      1 => 1731494289,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public/header.tpl' => 1,
    'file:public/footer.tpl' => 1,
  ),
),false)) {
function content_673481941cd254_54021257 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:public/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Modification</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="index.php">Accueil</a></li>
                    <li><a href="index.php?gestion=paymenttypes">Modes de paiement</a></li>
                    <li class="active">Modification</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Modifier le mode de paiement</strong>
                    </div>
                    <div class="card-body">
                        <form action="index.php" method="post" class="form-horizontal">
                            <input type="hidden" name="gestion" value="paymenttypes">
                            <input type="hidden" name="action" value="modifier">
                            <input type="hidden" name="Payment" value="<?php echo $_smarty_tpl->tpl_vars['paymenttype']->value->getPayment();?>
">
                            
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="Description" class="form-control-label">Description</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="Description" name="Description" class="form-control" 
                                           value="<?php echo $_smarty_tpl->tpl_vars['paymenttype']->value->getDescription();?>
" required>
                                </div>
                            </div>
                            
                            <div class="row form-group">
                                <div class="col col-md-3"></div>
                                <div class="col-12 col-md-9">
                                    <button type="submit" class="btn btn-success btn-sm">
                                        <i class="fa fa-check"></i> Valider
                                    </button>
                                    <a href="index.php?gestion=paymenttypes" class="btn btn-danger btn-sm">
                                        <i class="fa fa-ban"></i> Annuler
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:public/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php }
}
