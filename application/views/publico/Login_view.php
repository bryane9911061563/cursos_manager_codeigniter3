<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>FastManager - Cursos</title>
         <!--Sweet Alert 2 SCRIPT-->
         <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
        <!--////////////////////////////////////////////////////////-->
        <link href="<?=base_url();?>template/dist/css/styles.css" rel="stylesheet" />
        <link href="<?=base_url();?>template/dist/css/bootstrap-4.css" rel="stylesheet" />

        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Hola! Vamos a comenzar</h3></div>
                                    <div class="card-body">
                                        <form id="form-login">
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputEmailAddress">Correo</label>
                                                <input class="form-control py-4" name="correo" id="correo" type="email" placeholder="Enter email address" />
                                                <small id="error-correo" class="text-danger"></small>
                                                
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputPassword">Contraseña</label>
                                                <input class="form-control py-4" name="contrasena" id="contrasena" type="password" placeholder="Enter password" />
                                                <small id="error-contrasena" class="text-danger"></small>
                                            </div>
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" id="rememberPasswordCheck" type="checkbox" />
                                                    <label class="custom-control-label" for="rememberPasswordCheck">Recuerda mi contraseña</label>
                                                </div>
                                            </div>
                                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <a class="small" href="password.html">Olvidé mi contraseña</a>
                                                <button class="btn btn-primary" type="submit">Entrar</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small"><a href="registro">No tienes una cuenta? Registrate!</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="<?=base_url();?>template/dist/js/scripts.js"></script>
        <script src="<?=base_url();?>template/dist/js/login.js"></script>
    </body>
</html>
