<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ajouter un mode de paiement</title>
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
        {include file='public/breadcrumbs.tpl'}

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Ajouter un mode de paiement</strong>
                            </div>
                            <div class="card-body">
                                <form action="index.php" method="post" class="form-horizontal">
                                    <input type="hidden" name="gestion" value="paymenttypes">
                                    <input type="hidden" name="action" value="ajouter">
                                    
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="Description" class="form-control-label">Description</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="Description" name="Description" class="form-control" required>
                                        </div>
                                    </div>
                                    
                                    <div class="row form-group">
                                        <div class="col col-md-3"></div>
                                        <div class="col-12 col-md-9">
                                            <button type="submit" class="btn btn-primary btn-sm">
                                                <i class="fa fa-dot-circle-o"></i> Ajouter
                                            </button>
                                            <button type="reset" class="btn btn-danger btn-sm">
                                                <i class="fa fa-ban"></i> Réinitialiser
                                            </button>
                                        </div>
                                    </div>
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