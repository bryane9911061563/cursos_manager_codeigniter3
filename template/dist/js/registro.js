$("#form-registro").submit(function(e){
    e.preventDefault();
    $.ajax({
        url:'registrar_usuario',
        type:'POST',
        data:$(this).serialize(),
        dataType:'json',
        success:function(catch_resp){
            if(catch_resp.error){
                (catch_resp.nombres_error!='') ? $('#error-nombres').html(catch_resp.nombres_error):$('#error-nombres').html('');
                (catch_resp.apellidos_error!='') ? $('#error-apellidos').html(catch_resp.apellidos_error):$('#error-apellidos').html('');
                (catch_resp.correo_error!='') ? $('#error-correo').html(catch_resp.correo_error):$('#error-correo').html('');
                (catch_resp.contrasena1_error!='') ? $('#error-contrasena1').html(catch_resp.contrasena1_error):$('#error-contrasena1').html('');
                (catch_resp.contrasena2_error!='') ? $('#error-contrasena2').html(catch_resp.contrasena2_error):$('#error-contrasena2').html('');
            }else{
                
                $('#error-nombres').html('');
                $('#error-apellidos').html('');
                $('#error-correo').html('');
                $('#error-contrasena1').html('');
                $('#error-contrasena2').html('');
                Swal.fire({
                    title: 'Registro exitoso',
                    text: "Ahora puedes iniciar sesion",
                    icon: 'success',
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'Aceptar'
                  }).then((result) => {
                    if (result.isConfirmed) {
                        location.href="login";
                    }
                });
                $("#form-registro")[0].reset();
            }
        },error:function(){
            Swal.fire({
                title: 'Algo salió mal',
                text: "Intentalo nuevamente",
                icon: 'error',
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'Aceptar'
              }).then((result) => {
                if (result.isConfirmed) {
                }
            });
        }
    });
  });
