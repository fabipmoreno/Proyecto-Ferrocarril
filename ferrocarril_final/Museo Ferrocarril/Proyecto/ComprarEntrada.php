<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entradas Museo Ferrocarril</title>
    <link rel="stylesheet" href="Styles/TablaPrecios.css" class="precios">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Diphylleia&family=Honk&family=Rubik+Glitch+Pop&display=swap');
    </style>
</head>
<body>
    <?php include 'Includes/Header.php'; ?>
    <div class="containerPrecios">
        <table class="tablaPrecios">
            <thead>
                <tr>
                    <th>Tarifas</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>General </td>
                    <td id="precioGeneral">7€ </td>
                </tr>
                <tr>
                    <td>Familia Numerosa (Adultos)</td>
                    <td id="precioFamilia">4€</td>
                </tr>
                <tr>
                    <td>Niños</td>
                    <td id="precioNinos">4€</td>
                </tr>
                <tr>
                    <td>Mayores de 65</td>
                    <td id="precioMayores">4€</td>
                </tr>
                <tr>
                    <td>Estudiantes</td>
                    <td id="precioEstudiantes">4€</td>
                </tr>
                <tr>
                    <td>Niños menores a 4 años</td>
                    <td id="precioMenores">0€</td>
                </tr>
                <tr>
                    <td>Familia numerosa (niños)</td>
                    <td id="precioFamiliaNinos">0€</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="containerFormulario">

        <form id="formularioEntradas">
            <label for="fecha">Fecha:</label>
            <input class="inputForm" type="text" id="fecha" name="fecha" required>
            <label> Entradas general: </label>
            <input class="inputForm" type="number" id="numeroGeneral" name="numeroGeneral" value="0" min="0" onchange="calcularPrecio()">
            <label> Familia Numerosa: </label>
            <input class="inputForm" type="number" id="numeroFamilia" name="numeroFamilia" value="0" min="0" onchange="calcularPrecio()">
            <label> Niños: </label>
            <input class="inputForm" type="number" id="numeroNinos" name="numeroNinos" value="0" min="0" onchange="calcularPrecio()">
            <label> Mayores 65: </label>
            <input class="inputForm" type="number" id="numeroMayores" name="numeroMayores" value="0" min="0" onchange="calcularPrecio()">
            <label> Estudiantes: </label>
            <input class="inputForm" type="number" id="numeroEstudiantes" name="numeroEstudiantes" value="0" min="0" onchange="calcularPrecio()">
            <label> Familia numerosa (niños): </label>
            <input class="inputForm" type="number" id="numeroFamiliaNinos" name="numeroFamiliaNinos" value="0" min="0" onchange="calcularPrecio()">
            <label> Menores de 4: </label>
            <input class="inputForm" type="number" id="numeroMenores" name="numeroMenores" value="0" min="0" onchange="calcularPrecio()">
            <p class="precioTotal" id="precioTotal">Selecciona entradas para ver el precio: </p>
            <br>
            <input type="submit" class= "botonInput" value="Comprar entradas">
        </form>
    </div>

    <script src="Scripts/Precios.js" > </script>  
    

</body>
<footer>
	<?php include 'Includes/footer.php'; ?>   
	</footer>


</html>
