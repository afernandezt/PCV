$(document).ready(function(){
    $('.select2').select2({
        theme: 'bootstrap4'
    });
    $('#addworker').validate({
          rules: {
            name: {
              required: true,
            },
            nomina: {
              required: true,
              minlength: 5,
              maxlength: 6
            },
            puesto: {
              required: true
            },
            direccion: {
              required: true
            },
            edad: {
              required: true
            },
            sexo: {
              required: true
            },
            zona: {
              required: true,
            },
            altura: {
              required: true
            },
            peso: {
              required: true
            },
            imc: {
              required: true
            },
            covid: {
              required: true
            },
          },
          messages: {
            nomina: {
              required: "Por favor complete el campo",
              minlength: "ingrese la clave correcta"
            },
            name: {
              required: "Ingrese el nombre completo del trabajador",
            },
            puesto: {
              required: "seleccione un puesto para el trabajador"
            },
            direccion: {
              required: "Ingrese la direccion del tranajador"
            },
            edad: {
              required: "Ingrese la edad del trabajador"
            },
            sexo: {
              required: "seleccione el sexo del trabajador"
            },
            zona: {
              required: "Seleccione la zona del trabajador",
            },
            altura: {
              required: "Ingrese la altura del trabajador"
            },
            peso: {
              required: "ingrese el peso dle trabajador"
            }
          },
          errorElement: 'span',
          errorPlacement: function (error, element) {
            error.addClass('invalid-feedback');
            element.closest('.form-group').append(error);
          },
          highlight: function (element, errorClass, validClass) {
            $(element).addClass('is-invalid');
          },
          unhighlight: function (element, errorClass, validClass) {
            $(element).removeClass('is-invalid');
          }
        });
        $("#calc").click(function(){
            var alt = parseFloat($("#altura").val());
            var ps = parseFloat($("#peso").val());
            var resp = ps / (alt*alt);
            if(resp.toFixed(2) < 18.5){
                $("#cuerpo").val("1");
            }else if(resp.toFixed(1) >= 18.5 && resp.toFixed(1) <= 24.9){
                $("#cuerpo").val("2");
            }else if(resp.toFixed(1) >= 25 && resp.toFixed(1) <= 29.9){
                $("#cuerpo").val("3");
            }else if(resp.toFixed(1) >= 30 && resp.toFixed(1) <= 34.9){
                $("#cuerpo").val("4");
            }else if(resp.toFixed(1) >= 35 && resp.toFixed(1) <= 39.9){
                $("#cuerpo").val("5");
            }else if(resp.toFixed(2) >= 40 && resp.toFixed(2) < 49.9){
                $("#cuerpo").val("6");
            }          
            $("#imc").val(resp.toFixed(2));
            
        })
})