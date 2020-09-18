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
              minlength: 5
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
            zona: {
              required: true,
            },
            covid: {
              required: true
            },
          },
          messages: {
            nomina: {
              required: "Please provide a password",
              minlength: "Your password must be at least 5 characters long"
            },
            terms: "Please accept our terms"
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
})