<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{$titreVue}</title>
    <meta name="description" content="{$titreVue}">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="public/favicon.ico">
    <link rel="stylesheet" href="public/assets/css/normalize.css">
    <link rel="stylesheet" href="public/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="public/assets/scss/style.css">
</head>
<body>
    {include file='public/left.tpl'}
    
    <div id="right-panel" class="right-panel">
        {include file='public/header.tpl'}
        
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
                                <p><strong>ID :</strong> {$paymenttype->getPayment()}</p>
                                <p><strong>Description :</strong> {$paymenttype->getDescription()}</p>
                                
                                <form action="index.php" method="post">
                                    <input type="hidden" name="gestion" value="paymenttypes">
                                    <input type="hidden" name="action" value="supprimer">
                                    <input type="hidden" name="Payment" value="{$paymenttype->getPayment()}">
                                    
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

    <script src="public/assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="public/assets/js/popper.min.js"></script>
    <script src="public/assets/js/plugins.js"></script>
    <script src="public/assets/js/main.js"></script>
</body>
</html> 