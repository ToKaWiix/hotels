<!doctype html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="public/assets/css/bootstrap.min.css">
</head>
<body>

{include file='public/header.tpl'}

<div class="container">
    <form method="POST" action="index.php">
        <input type="hidden" name="gestion" value="paymenttypes">
        <input type="hidden" name="action" value="ajouter">
        
        <div class="form-group">
            <label for="type">Type de paiement :</label>
            <input type="text" class="form-control" id="type" name="type" required>
        </div>
        
        <div class="form-group">
            <label for="description">Description :</label>
            <input type="text" class="form-control" id="description" name="description" required>
        </div>

        <button type="submit" class="btn btn-primary">Ajouter</button>
        <a href="index.php?gestion=paymenttypes" class="btn btn-secondary">Retour</a>
    </form>
</div>

<script src="public/assets/js/vendor/jquery-2.1.4.min.js"></script>
<script src="public/assets/js/bootstrap.min.js"></script>
</body>
</html>
