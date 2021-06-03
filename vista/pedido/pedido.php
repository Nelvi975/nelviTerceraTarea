<!DOCTYPE html>
<html>

<head>
    <title>Admin</title>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>

<body>
    <div class="pos-f-t">
        <nav class="navbar navbar-dark bg-dark">
            <button id="navi" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <label for="navi" class="navbar-toggler"><img src="../images/Faisan Dorado.png" alt="logo" width="75px" height="50px"></label>
            <a href="../logins/Logout.php" class="navbar-toggler">Cerrar Sesión</a>
        </nav>
        <div class="collapse" id="navbarToggleExternalContent">
            <!-- este campo es el menu desplegable -->
            <div class="bg-dark p-4">
                <h5 class="text-white h4">Faisán Dorado</h5>
                <ul class="nav nav-pills flex-column flex-sm-row">
                    <li class="nav-item">
                        <a class="flex-sm-fill text-sm-center nav-link" style="margin-left: 25px;" href="AdminInicio.php">Inicio</a>
                    </li>
                    <!-- Example split dark button -->
                    <div class="btn-group">
                        <a href="#"><button type="button" class="btn btn-dark">Categorías</button></a>
                        <button type="button" class="btn btn-dark dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="CatTabla.php">Tabla</a>
                            <a class="dropdown-item" href="CatNuevo.php">Nuevo</a>
                        </div>
                    </div>
                    <!-- Enlaces Productos  -->
                    <div class="btn-group">
                        <a href="#"><button type="button" class="btn btn-dark">Productos</button></a>
                        <button type="button" class="btn btn-dark dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="ProdTabla.php">Tabla</a>
                            <a class="dropdown-item" href="ProdNuevo.php">Nuevo</a>
                        </div>
                    </div>
                    <!-- Enlace Promociones  -->
                    <li class="nav-item">
                        <a class="flex-sm-fill text-sm-center nav-link disabled" style="margin-left: 25px;" href="#">Promociones</a>
                    </li>
                    <li class="nav-item">
                        <a class="flex-sm-fill text-sm-center nav-link" style="margin-left: 25px;" href="AdminClientes.php">Clientes</a>
                    </li>
                    <li class="nav-item">
                        <a class="flex-sm-fill text-sm-center nav-link" style="margin-left: 25px;" href="Admin.php">Admininistradores</a>
                    </li>
                    <li class="nav-item">
                        <a class="flex-sm-fill text-sm-center nav-link" style="margin-left: 25px;" href="Estadistico.php">Gráfico de ventas</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>



    <div class="container">
        <div class="row">
            <h2>Registro de Administradores</h2>
            <div class="col-sm-12">
                <div class="card text-left">
                    <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item">
                                <a class="nav-link active" href="#">Crud PDO</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <span class="btn btn-primary" data-toggle="modal" data-target="#insertarModal">
                                    <i class="fas fa-plus-circle"></i> Nuevo administrador
                                </span>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-12">
                                <div id="tablaDatos"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require_once "modalInsert.php" ?>
    <?php require_once "modalUpdate.php" ?>

    <script src="../librerias/jquery-3.4.1.min.js"></script>
    <script src="../librerias/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../librerias/sweetalert.min.js"></script>
    <script src="../js/crud.js"></script>


    <script type="text/javascript">
        mostrar();
    </script>

</body>

</html>