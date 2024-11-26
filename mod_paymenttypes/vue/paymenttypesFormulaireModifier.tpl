{include file='public/header.tpl'}

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
                            <input type="hidden" name="Payment" value="{$paymenttype->getPayment()}">
                            
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="Description" class="form-control-label">Description</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="Description" name="Description" class="form-control" 
                                           value="{$paymenttype->getDescription()}" required>
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

{include file='public/footer.tpl'} 