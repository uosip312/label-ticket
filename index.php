<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>eTickets </title>
    <link rel="stylesheet" href="css/css.css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="css/icon.css?family=Material+Icons">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="jspdf/dist/jspdf.min.js"></script>
    <link rel="stylesheet" href="css/custom.css">
</head>

<body>
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-9">
                        <h2>Impresion de Tickets <b>Alberto Arnaud Auto Parts</b></h2>
                    </div>
                    <div class="col-sm-3">
                        <a href="#addProductModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Nuevo producto</span></a>
                    </div>
                </div>
            </div>
            <div class='col-sm-4 pull-right'>
                <div id="custom-search-input">
                    <div class="input-group col-md-12">
                        <input type="text" class="form-control" placeholder="Buscar" id="q" onkeyup="load(1);" />
                        <span class="input-group-btn">
                                    <button class="btn btn-info" type="button" onclick="load(1);">
                                        <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
                    </div>
                </div>
            </div>
            <div class='clearfix'></div>
            <hr>
            <div id="loader"></div>
            <!-- Carga de datos ajax aqui -->
            <div id="resultados"></div>
            <!-- Carga de datos ajax aqui -->
            <div class='outer_div'></div>
            <!-- Carga de datos ajax aqui -->

		<footer class="sticky container">
			Soluciones Tecnologicas YC, SRL. (Edison de la Cruz) | 2019®
		</footer>
        </div>
		
    </div>
    <!-- Add Modal HTML -->
    <?php include("html/modal_add.php");?>
    <!-- Edit Modal HTML -->
    <?php include("html/modal_edit.php");?>
    <!-- Delete Modal HTML -->
    <?php include("html/modal_delete.php");?>
    <script src="js/script.js"></script>
</body>

</html>