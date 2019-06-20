<?php 
    include_once('config/config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Rodrigo Avalos">
    <link rel="stylesheet" href="<?=BASE_URL?>resources/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=BASE_URL?>resources/bootstrap/css/bootstrap-theme.min.css">
    <link href="<?=BASE_URL;?>resources/css/jquery-ui.css" rel="stylesheet" type="text/css">
    <script type="text/javascript"> var base_url = '<?=BASE_URL;?>'; </script>
    <script src="<?=BASE_URL;?>resources/js/jquery.js"></script>
    <script src="<?=BASE_URL;?>resources/js/jquery-ui.js"></script>
    <script src="<?=BASE_URL?>resources/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?=BASE_URL?>resources/js/functions.js?v2"></script>
    <style type="text/css">
        .ui-autocomplete{
            z-index: 9999 !important;
        }

        .ui-autocomplete li{
            font-size: 12px;
        }

        .table-form{
            width: 100%;
        }

        .table-form tr td{
            padding: 5px;
        }

        .table-form tr td input[type=number]{
            text-align: right;
        }
    </style>
</head>
<body>
    <div class="container-fluid">