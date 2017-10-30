$(document).ready(function () {

    $.validator.addMethod("eX", function (value, element) {
        return this.optional(element) || /^\d{0,2}(?:\.\d)?$/.test(value);
    }, 'Solo se admiten números de dos enteros y un decimal.');

    // Reglas del formulario registro
    $('#frmPlanillas').validate({
        ignore: [],
        rules: {
            fInicio:{
                required: true,
            },
            fFinal:{
                required: true,
            },
            'horasNormal[]': {
                required: true,
                eX: true,
            },
            'horasExtra[]': {
                required: true,
                eX: true,
            },
        },

        highlight: function (element) {
            $(element).parent().addClass('has-error');
        },
        unhighlight: function (element) {
            $(element).parent().removeClass('has-error');
        },
        errorElement: 'span',
        errorClass: 'validation-error-message help-block form-helper bold',
        errorPlacement: function (error, element) {
            if (element.parent('.input-group').length) {
                error.insertAfter(element.parent());
            } else {
                error.insertAfter(element);
            }
        },

        messages: {
            fInicio:"Seleccione una fecha de inicio",
            fFinal:"Seleccione una fecha de fin"  
        }

    });

});