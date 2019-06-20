<?php 
    include_once('templates/header.php'); 
    include_once('classes/sales.php'); 
    $sales = new Sales;
?>
    <div class="row">
        <br>
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3>
                        <strong>
                            <i class="glyphicon glyphicon-shopping-cart"></i> Mis ventas
                        </strong>
                    </h3>
                </div>
                <div class="panel-body">
                    <button class="btn btn-primary" id="new-sale">
                        <i class="glyphicon glyphicon-plus"></i> Nueva venta
                    </button>
                    <br><br>
                    <table class="table table-condensed table-bordered table-striped table-hover" id="table-sale">
                        <thead>
                            <tr>
                                <th>Fecha y hora</th>
                                <th>Serie</th>
                                <th>Numero</th>
                                <th>RFC</th>
                                <th>Razon social</th>
                                <th>Total</th>
                                <th width="180px">Opcion</th>
                            </tr>
                        </thead>
                        <tbody><?=$sales->get_data();?></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php include_once('templates/footer.php'); ?>