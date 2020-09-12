<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Page Title - SB Admin</title>
         <!--Sweet Alert 2 SCRIPT-->
         <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
        <!--////////////////////////////////////////////////////////-->
        <link href="<?=base_url();?>template/dist/css/styles.css" rel="stylesheet" />
        <link href="<?=base_url();?>template/dist/css/bootstrap-4.css" rel="stylesheet" />

        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Crear cuenta</h3></div>
                                    <div class="card-body">
                                        <form id="form-registro">
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputFirstName">Nombre(s)</label>
                                                        <input class="form-control py-4" name="nombres" id="nombres" type="text" placeholder="Ingrese su nombre" />
                                                        <small class="text-danger" id="error-nombres"></small>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputLastName">Apellidos</label>
                                                        <input class="form-control py-4" name="apellidos" id="apellidos" type="text" placeholder="Ingrese sus apellidos" />
                                                        <small class="text-danger" id="error-apellidos"></small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputEmailAddress">Correo</label>
                                                <input class="form-control py-4" name="correo" id="correo" type="email" aria-describedby="emailHelp" placeholder="Ingrese su direccion de correo" />
                                                <small class="text-danger" id="error-correo"></small>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputPassword">Contraseña</label>
                                                        <input class="form-control py-4" name="contrasena1" id="contrasena1" type="password" placeholder="Ingrese una contraseña" />
                                                        <small class="text-danger" id="error-contrasena1"></small>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputConfirmPassword">Confirmar Contraseña</label>
                                                        <input class="form-control py-4" name="contrasena2" id="contrasena2" type="password" placeholder="Confirma su contraseña" />
                                                        <small class="text-danger" id="error-contrasena2"></small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group mt-4 mb-0"><button class="btn btn-primary btn-block" type="submit">Crear Cuenta</button></div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small"><a href="<?=base_url();?>login">Ya tienes cuenta? Inicia sesión</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            
        </div>
        
    </body>
</html>
<script src="<?=base_url();?>template/dist/js/registro.js"></script>
