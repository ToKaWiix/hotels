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
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header"><strong>{$titrePage}</strong></div>
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

    <script src="public/assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="public/assets/js/plugins.js"></script>
    <script src="public/assets/js/main.js"></script>
</body>
</html> 