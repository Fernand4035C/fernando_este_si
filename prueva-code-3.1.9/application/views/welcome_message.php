<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html>
    <head>
        <title>Inicio</title>
        <link href="<?php echo base_url('./assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
        <link href="<?php echo base_url('./assets/fonta/css/all.css'); ?>" rel="stylesheet">
        <link href="<?php echo base_url('./assets/css/owncss.css'); ?>" rel="stylesheet">
    </head>
    <body>
        <div class="container">

            <div class="card text-center my-5">
                <div class="card-header">
                        <div class="justify-content-center d-flex">
                            <span class="fa-stack fa-2x">
                                <i class="fas fa-square fa-stack-2x"></i>
                                <i class="fas fa-home fa-stack-1x fa-inverse"></i>
                            </span>
                            <h1 class="my-auto" style="font-size: 3.7rem">Bienvenido!</h1> 
                        </div>
                        
                     
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-center">
                        <form class="card my-3 px-2" style="background: #EDE3DC">
                            <div class="card-body" >
                                <div class="form-group my-1">
                                    <label for="login-user">Usuario</label>
                                    <input type="email" class="form-control" id="login-user">                                
                                </div>
                                <div class="form-group my-1" >
                                    <label for="login-password">Contraseña</label>
                                    <input type="password" class="form-control" id="login-password">
                                </div>
                                <button style="font-size: 1.7rem" type="submit" class="btn btn-success btn-block mt-4 mb-2">Ingresar</button>
                            </div>

                        </form>

                    </div>

                </div>
            </div>
            <!-- Content here -->

        </div>
        <script src="<?php echo base_url('./assets/'); ?>"></script>        
    </body>
</html>
