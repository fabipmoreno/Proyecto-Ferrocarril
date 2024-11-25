
$(function () {
    $("#fecha").datepicker({
        beforeShowDay: function (date) {
            var day = date.getDay();
            var month = date.getMonth() + 1; // Nota: getMonth devuelve un valor de 0 a 11
            var dayOfMonth = date.getDate();

            // Deshabilitar días pasados
            var today = new Date();
            today.setHours(0, 0, 0, 0);

            if (date < today) {
                return [false];
            }

            // Deshabilitar 25 de diciembre, 1 de enero y 6 de enero
            if ((month === 12 && dayOfMonth === 25) ||
                (month === 1 && (dayOfMonth === 1 || dayOfMonth === 6))) {
                return [false];
            }

            // Permitir todas las demás fechas
            return [true];
        }
    });
});


function calcularPrecio() {
    var precioGeneral = 7;
    var precioFamilia = 4;
    var precioNinos = 4;
    var precioMayores = 4;
    var precioEstudiantes = 4;
    var precioMenores = 0;
    var precioFamiliaNinos = 0;

    var numeroGeneral = parseInt(document.getElementById('numeroGeneral').value);
    var numeroFamilia = parseInt(document.getElementById('numeroFamilia').value);
    var numeroNinos = parseInt(document.getElementById('numeroNinos').value);
    var numeroMayores = parseInt(document.getElementById('numeroMayores').value);
    var numeroEstudiantes = parseInt(document.getElementById('numeroEstudiantes').value);
    var numeroMenores = parseInt(document.getElementById('numeroMenores').value);
    var numeroFamiliaNinos = parseInt(document.getElementById('numeroFamiliaNinos').value);
    

    var total = (precioGeneral * numeroGeneral) +
                (precioFamilia * numeroFamilia) +
                (precioNinos * numeroNinos) +
                (precioMayores * numeroMayores) +
                (precioEstudiantes * numeroEstudiantes) +
                (precioMenores * numeroMenores) +
                (precioFamiliaNinos * numeroFamiliaNinos);

    document.getElementById('precioTotal').innerHTML = 'Precio total: ' + total + '€';
}
