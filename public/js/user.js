$(document).ready(function(){
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
});