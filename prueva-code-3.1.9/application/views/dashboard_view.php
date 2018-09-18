<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html>
    <head>
        <title>Inicio</title>
        <link href="<?php echo base_url('./assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
        <link href="<?php echo base_url('./assets/fonta/css/all.css'); ?>" rel="stylesheet">       
        <link href="<?php echo base_url('./assets/fonts/Roboto-Regular.ttf'); ?>" rel="stylesheet"> 
        <link href="<?php echo base_url('./assets/css/owncss.css'); ?>" rel="stylesheet">
    </head>
    <body class="bg-secondary">
        <nav id="navbarDash" class="navbar sticky-top navbar-dark bg-dark navbar-expand-md mb-3" style="font-size: 1.3rem" >
            <div class="container">
                <a class="navbar-brand" style="font-size: 1.7rem" href="#">                   
                    <span class="fa-stack">
                        <i class="fas fa-square fa-stack-2x"></i>
                        <i class="fas fa-tasks fa-stack-1x fa-inverse" id="logo-icon"></i>
                    </span>
                    Notas C.E.C.S.A.S                    
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Principal<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item" data-toggle="tooltip" data-placement="bottom" title="Ir al apartado de las Notas">
                            <a class="nav-link" href="#" >Notas</a>
                        </li>
                        <li class="nav-item" data-toggle="tooltip" data-placement="bottom" title="Ir al apartado de la Asistencia">
                            <a class="nav-link" href="#" >Asistencia</a>
                        </li>
                    </ul>
                    <div class="dropdown navbar-nav" data-toggle="tooltip" data-placement="left" title="Opciones de cuenta">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="fa-stack">
                                <i class="fas fa-square fa-stack-2x"></i>
                                <i class="far fa-user fa-stack-1x fa-inverse"></i>
                            </span>
                            NombreUsuario
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Cambiar Contraseña</a>
                            <a class="dropdown-item" href="#">Cerrar Sesion</a>
                        </div>
                    </div>
                </div>
            </div>


        </nav>
        <div class="container" class="" style="font-size: 1.2rem">
            <div class="row" class="">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item my-auto"><a href="<?php echo base_url('Users_Controller'); ?>">DashBoard</a></li>
                            <li class="breadcrumb-item active mr-auto my-auto" aria-current="page">Principal</li>  
                            <li><button class="btn btn-sm" id="toggler-clas" style="font-size: 1rem"><i class="fas fa-sync-alt"></i> - Matutino <i class="far fa-circle"></i></button></li>
                        </ol>
                        
                    </nav>
                </div>
                <div class="col-lg-4 col-md-6 mb-2" >
                    <div class="card">
                        <div class="card-header">
                            1er Trimestre
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Notas</li>
                            <li class="list-group-item">Asistencia</li>
                            <li class="list-group-item">Observaciones</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-2">
                    <div class="card">
                        <div class="card-header">
                            2do Trimestre
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Notas</li>
                            <li class="list-group-item">Asistencia</li>
                            <li class="list-group-item">Observaciones</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-2">
                    <div class="card">
                        <div class="card-header">
                            3er Trimestre
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Notas</li>
                            <li class="list-group-item">Asistencia</li>
                            <li class="list-group-item">Observaciones</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <script src="<?php echo base_url('./assets/js/jquery-3.3.1.min.js'); ?>"></script>
        <script src="<?php echo base_url('./assets/js/popper.min.js'); ?>"></script> 
        <script src="<?php echo base_url('./assets/js/bootstrap.min.js'); ?>"></script>   
        <script src="<?php echo base_url('./assets/js/ownjs.js'); ?>"></script> 

    </body>
</html>
