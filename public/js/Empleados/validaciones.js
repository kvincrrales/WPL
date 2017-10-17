$(document).ready(function () {

    $.validator.addMethod("cF", function (value, element) {
        return /^([1-9]{1})(\d{8})$/.test(value);
    });

    $.validator.addMethod("cJ", function (value, element) {
        return /^(\d{10})$/.test(value);
    });

    $.validator.addMethod("dM", function (value, element) {
        return /^([1-9]{1})((\d{10})|(\d{11}))$/.test(value);
    });

    $.validator.addMethod("nT", function (value, element) {
        return /^(\d{10})$/.test(value);
    });

    $.validator.addMethod("eM", function (value, element) {
        return this.optional(element) || /^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@(?:\S{1,63})$/.test(value);
    });

    $.validator.addMethod("eT", function (value, element) {
        return this.optional(element) || /^\d*$/.test(value);
    }, 'Solo se admiten números.');

    $('#numId , #tipoId').on('keypress , change', function () {
        switch ($('#tipoId').val()) {
            case "Cedula Identidad":
            $('#numId').rules('remove');
            $('#numId').rules('add', {
                cF: true,
            });
            return;
            case "Cedula Juridica":
            $('#numId').rules('remove');
            $('#numId').rules('add', {
                cJ: true,
            });
            return;
            case "Cedula de Residencia":
            $('#numId').rules('remove');
            $('#numId').rules('add', {
                dM: true,
            });
            return;
            case "Pasaporte":
            $('#numId').rules('remove');
            $('#numId').rules('add', {
                nT: true,
            });
            return;
            case "Carnet de Refugiado":
            $('#numId').rules('remove');
            $('#numId').rules('add', {
                nT: true,
            });
            return;
        }
    });

    // Reglas del formulario registro
    $('#frmRegistrarEmpleado').validate({
        rules: {
            estatus:{
                required: true,
            },
            fIngreso:{
                required: true,
            },
            sexo: {
                required: true,
            },
            tipoId: {
                required: true,
            },
            numId:{
                required: true,
            },
            nomb:{
                required: true,
            },
            ape1:{
                required: true,
            },
            ape2:{
                required: true,
            },
            fNac: {
                required: true,
            },
            nCel: {
                required: true,
            },
            nCasa: {
                required: false,
            },
            email: {
                required: true,
                eM: true,
            },
            dir: {
                required: true,
            },
            dept_id: {
                required: true,
            },
            puesto_id: {
                required: true,
            },
            fPago: {
                required: true,
            },
            cBanc: {
                required: true,
            },
            cAhorro: {
                required: false,
            },
            tipoPlanilla: {
                required: true,
            },
            fotoEmpleado: {
                required: true,
            }
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
            estatus:"Seleccione el estatus del empleado",
            fIngreso:"Ingrese la fecha en la que el empleado ingreso a la empresa",
            sexo:"Seleccione el sexo",
            tipoId:"Ingrese correctamente el tipo de identificación",
            numId: "Digite correctamente su número de identificación",
            nomb:"Digite correctamente el nombre",
            ape1:"Digite correctamente el apellido",
            ape2:"Digite correctamente el apellido",
            fNac:"Seleccione la fecha de nacimiento del empleado",
            nCel:"Digite el número de celular del empleado",
            nCasa:"Digite el número de la casa del empleado",
            email: {
                required: "Necesitamos su email para contactarlo",
                email: "Su email debe de tener un formato como nombre@dominio.com"
            },
            dir:"Ingrese una dirección",
            fPago:"Seleccione una forma de pago",
            cBanc:"Digite la cuenta cliente del empleado",
            cAhorro:"Digite la cuenta cliente de ahorros del empleado",
            fotoEmpleado:"Adjunte una foto del empleado"
        }

    });

});