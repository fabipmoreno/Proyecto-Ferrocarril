<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="Styles/Contactar.css">
</head>
<body>

<?php include 'Includes/Header.php'; ?>

<div class="containerFormulario">
<div class="imagenContainer">
    <img src="img/Contacto.jpg" alt="Foto de contacto">
    <h2><strong>Contacto</strong></h2>
    <p>Difusión y comunicación <br>
    Tel: 91 506 83 42 <br>
    <a href="mailto:comunicacionmuseo@ffe.es">comunicacionmuseo@ffe.es</a> <br></p>
    <img src="img/BandaFerrocarril.jpg" alt="Foto de contacto">
</div>
    <div class="formularioContainer">
        <h1>Formulario de contacto</h1>
        <form action="formulariocontacto" method="post" enctype="text/plain">
            <label for="nombre">Nombre:</label><br>
            <input type="text" id="nombre" name="nombre" required><br><br>

            <label for="telefono">Teléfono de contacto:</label><br>
            <input type="tel" id="telefono" name="telefono" required><br><br>

            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" required><br><br>

            <label for="mensaje">Mensaje:</label><br>
            <textarea id="mensaje" name="mensaje" rows="4" required></textarea><br><br>

            <input type="submit" value="Enviar" class="botonEnviar">
        <div class="form-checkbox">
            <input type="checkbox" id="aceptar" name="aceptar">
            <label for="aceptar">Acepto los términos y condiciones del aviso legal y la política de privacidad*</label>
            </div>
            <p3><br>En cumplimiento de lo establecido en la Ley Orgánica 3/2018, de 5 de diciembre, de Protección 
            de Datos Personales y Garantía de los Derechos Digitales y en el Reglamento (UE) 2016/679 del Parlamento 
            Europeo y del Consejo de 27 de Abril de 2016, relativo a la protección de las personas físicas en lo que respecta al tratamiento de datos personales y a la libre circulación de estos datos, le informamos que los datos facilitados pasarán a formar parte de un fichero propiedad del Museo del Ferrocarril de Madrid de la Fundación de los Ferrocarriles Españoles y podrán ser utilizados para atender su consulta e informarle, si así lo desea, de las actividades, noticias y novedades relacionadas con el Museo.</p3>
        </form>

    </div>
</div>



</body>
<footer>
<?php include 'Includes/footer.php'; ?>
</footer>

</html>





