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
        errorElement : 'div',
        errorLabelContainer: '.divMensajeValidacion',

        messages: {
            fInicio:"Seleccione una fecha de inicio",
            fFinal:"Seleccione una fecha de fin",
            'horasNormal[]': "Solo se admiten números de dos enteros y un decimal.",  
              'horasExtra[]': "Solo se admiten números de dos enteros y un decimal.",

        }

    });

});

x = new AutoNumeric("#horasNormal", {  
    allowDecimalPadding: 'false',
    decimalCharacter: '.',
    decimalPlaces: '1',
    roundingMethod: 'U',
    digitGroupSeparator: '',
    onInvalidPaste: 'ignore',
    minimumValue: '0',
    maximumValue: '99.9',
    showWarnings: 'false',
    modifyValueOnWheel: 'false', });

y = new AutoNumeric("#horasExtra", {  
    allowDecimalPadding: 'false',
    decimalCharacter: '.',
    decimalPlaces: '1',
    roundingMethod: 'U',
    digitGroupSeparator: '',
    onInvalidPaste: 'ignore',
    minimumValue: '0',
    maximumValue: '99.9',
    showWarnings: 'false',
    modifyValueOnWheel: 'false', });

var campoNumericoMin1Max1k = {
    minimumValue: '1',
    maximumValue: '999',
    showWarnings: 'false',
};

var campoNumericoE13D3 = {
    //13,3
    allowDecimalPadding: 'false',
    decimalCharacter: '.',
    decimalPlaces: '3',
    roundingMethod: 'U',
    digitGroupSeparator: '',
    onInvalidPaste: 'ignore',
    minimumValue: '0',
    maximumValue: '9999999999999.999',
    showWarnings: 'false',
    defaultValueOverride: "",
    //wheelStep: 1,
    //modifyValueOnWheel: 'false', este para los montos totales que estan readonly
    modifyValueOnWheel: 'false',
};

var campoNumericoE13D5 = {
    //13,5
    allowDecimalPadding: 'false',
    decimalCharacter: '.',
    decimalPlaces: '5',
    roundingMethod: 'U',
    digitGroupSeparator: '',
    onInvalidPaste: 'ignore',
    minimumValue: '0',
    maximumValue: '9999999999999.99999',
    showWarnings: 'false',
    //wheelStep: 1000,
    modifyValueOnWheel: 'false',
};

const campoNumericoE4D2 = {
    //4,2%
    allowDecimalPadding: 'false',
    decimalCharacter: '.',
    decimalPlaces: '2',
    roundingMethod: 'U',
    digitGroupSeparator: '',
    onInvalidPaste: 'ignore',
    minimumValue: '0',
    maximumValue: '99.99',
    showWarnings: 'false',
    //rawValueDivisor: 100,
    //wheelStep: 10,
    modifyValueOnWheel: 'false',
};