<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Inicio</title>
        <link rel="stylesheet" href="./../css/bootstrap.min.css">
        <link rel="stylesheet" href="./../css/bootstrap.css">
        <link rel="shortcut icon" href="./../imagen/logo.png">
    </head>
    <style>
        .prevPhoto {
    display: flex;
    justify-content: space-between;
    width: 160px;
    height: 150px;
    border: 1px solid #CCC;
    position: relative;
    cursor: pointer;
    background: url(../images/uploads/user.png);
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center center;
    margin: auto;
}
.prevPhoto label{
	cursor: pointer;
	width: 100%;
	height: 100%;
	position: absolute;
	top: 0;
	left: 0;
	z-index: 2;
}
.prevPhoto img{
	width: 100%;
	height: 100%;
}
.upimg, .notBlock{
	display: none !important;
}
.errorArchivo{
	font-size: 16px;
	font-family: arial;
	color: #cc0000;
	text-align: center;
	font-weight: bold; 
	margin-top: 10px;
}
.delPhoto{
	color: #FFF;
	display: -webkit-flex;
	display: -moz-flex;
	display: -ms-flex;
	display: -o-flex;
	display: flex;
	justify-content: center;
	align-items: center;
	border-radius: 50%;
	width: 25px;
	height: 25px;
	background: red;
	position: absolute;
	right: -10px;
	top: -10px;
	z-index: 10;
}
#tbl_list_productos img{
	width: 50px;
}
.imgProductoDelete{
	width: 175px;
}
    </style>
    <body><!-- este campo es para el contenido -->        
        <div class="pos-f-t">
            <nav class="navbar navbar-dark bg-dark">
                <button id="navi" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>

                </button>  
                <label for="navi" class="navbar-toggler bg-light"><img src="./../imagen/logo.png" alt="logo" width="200px" height="50px"></label>
                <a href="./login/salir.php" class="navbar-toggler">Cerrar Sesión</a>
            </nav> 
            <div class="collapse" id="navbarToggleExternalContent"><!-- este campo es el menu desplegable -->
                <div class="bg-dark p-4">
                    <h5 class="text-white h4">Panel del Administrador</h5>
                    <ul class="nav nav-pills flex-column flex-sm-row" >
                        <li class="nav-item">
                            <a class="flex-sm-fill text-sm-center nav-link" style="margin-left: 25px;"href="./index.php">Inicio</a>
                        </li>
                        <!-- Example split dark button -->
                        <!-- Enlace Promociones  -->
                        <li class="nav-item">
                            <a class="flex-sm-fill text-sm-center nav-link disabled" style="margin-left: 25px;" href="#">Promociones</a>
                        </li>
                        <li class="nav-item">
                            <a class="flex-sm-fill text-sm-center nav-link" style="margin-left: 25px;" href="./cliente/cliente.php">Clientes</a>
                        </li>
                        <li class="nav-item">
                            <a class="flex-sm-fill text-sm-center nav-link" style="margin-left: 25px;" href="./producto/producto.php">Productos</a>
                        </li>
                        <li class="nav-item">
                            <a class="flex-sm-fill text-sm-center nav-link" style="margin-left: 25px;" href="Estadistico.php">Gráfico de ventas</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>


