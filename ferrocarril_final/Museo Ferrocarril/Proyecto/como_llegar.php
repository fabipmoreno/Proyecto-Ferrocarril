<!DOCTYPE html>
<html lang="es">
<head>
    <title>Mapa Interactivo Simple</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <link rel="stylesheet" href="Styles/como_llegar.css">
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cómo llegar al Museo Ferrocarril</title>
    <?php include 'Includes/Header.php'; ?>
</head>
<body>
    <div class="row">
    <div class="contenido">
        <h1>Cómo llegar al Museo Ferrocarril</h1>
        <p>El Museo Ferrocarril se encuentra ubicado en Paseo de las Delicias, 61, Arganzuela, 28045 Madrid. Puedes llegar utilizando transporte público o en coche.</p>
        <h2>Transporte público</h2>
        <p>La estación de tren/metro más cercana es Palos de la Frontera o en renfe la estación de Delicias. Desde allí, el museo está a cinco minutos a pie.</p>
        <h2>En coche</h2>
        <p>Si vienes en coche, puedes utilizar la M-30 y tomar la salida Paseo de las Delicias. El museo ofrece aparcamiento gratuito.</p>
    </div>

    <div id="mapa">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3038.426693309588!2d-3.694666124173589!3d40.39939727144237!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd42263a17d66dd1%3A0xb46b68a535be221e!2sMuseo%20del%20Ferrocarril%20de%20Madrid!5e0!3m2!1ses!2ses!4v1707480945427!5m2!1ses!2ses" 
        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    </div>

   

</body>
<footer>
        <?php include 'Includes/footer.php'; ?>   
    </footer>
</html>

