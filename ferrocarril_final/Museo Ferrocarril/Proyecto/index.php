<!-- index.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Museo Ferrocarril </title>
</head>
<body>
<link rel="stylesheet" href="Styles/LandingPage.css">

<?php include 'Includes/Header.php'; ?>

<main>
        <section id="hero" class="hero">
            <div class="hero-container">
                <a href="#about" class="button">Compra tus entradas</a>
            </div>
        </section>
    
        <section id="about">
            <div class="container">
                <h2>Acerca del Museo</h2>
                <div class="about-content">
                    <p>
                        El Museo del Ferrocarril es un lugar dedicado a preservar y compartir la historia del transporte ferroviario. Ubicado en un edificio histórico restaurado, ofrecemos una experiencia educativa y emocionante para visitantes de todas las edades.
                    </p>
                    <p>
                        Nuestra colección incluye una variedad de locomotoras, vagones, herramientas y artefactos relacionados con el ferrocarril. Desde los primeros días del vapor hasta los trenes de alta velocidad modernos, cada pieza cuenta una parte importante de la evolución del transporte.
                    </p>
                    <p>
                        Además de nuestras exposiciones permanentes, ofrecemos visitas guiadas, eventos especiales y actividades interactivas para enriquecer la experiencia de nuestros visitantes.
                    </p>
                </div>
            </div>
        </section>

        <section id="exposiciones" class="exposiciones"> 
            <div class="expoTemporal">
                <h2> Exposiciones Temporales </h2>
                <div class="imagenesExpo">
                    <img class="imagenExpo" src="img/Sala3000Temporal.png">
                    <img class="imagenExpo" src="img/SalaTemporales.png">
                </div>
    
            </div>
            <div class="expoVirtual">
                <h2> Exposiciones Virtuales </h2>
                <div class="imagenesExpo">
                    <img class="imagenExpo" src="img/Expo_FerroviariasVirtual.png">
                    <img class="imagenExpo" src="img/Expo_DeliciasVirtual.png">
                </div>
            </div>
        </section>


        <div class="Carousel">
            <h2>Colección</h2>
            <div class="slick-list" id="slick-list">
                <button class="slick-arrow slick-prev" id="button-prev" data-button="button-prev" onclick="app.processingButton(event)">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-left" class="svg-inline--fa fa-chevron-left fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z"></path></svg>
                </button>
                <div class="slick-track" id="track">
                    <div class="slick">
                        <div>
                            <a>
                                <h4><small>Colección de automoteres</small></h4>
                                <picture>
                                <a href="./Coleccion.php"><img src="Coleccion/ColAutomotores_01.jpg" alt="Image">
                                </picture>
                            </a>
                        </div>
                    </div>
                    <div class="slick">
                        <div>
                            <a>
                                <h4><small>Colección de automoteres</small></h4>
                                <picture>
                                <a href="./Coleccion.php"> <img src="Coleccion/ColAutomotores_04.jpg" alt="Image">
                                </picture>
                            </a>
                        </div>
                    </div>
                    <div class="slick">
                        <div>
                            <a>
                                <h4><small>Locomotoras de Diesel</small></h4>
                                <picture>
                                <a href="./Coleccion.php"><img src="Coleccion/ColDiesel_02.jpg" alt="Image">
                                </picture>
                            </a>
                        </div>
                    </div>
                    <div class="slick">
                        <div>
                            <a>
                                <h4><small>Locomotoras de Diesel</small></h4>
                                <picture>
                                <a href="./Coleccion.php"><img src="Coleccion/ColDiesel_03.jpg" alt="Image">
                                </picture>
                            </a>
                        </div>
                    </div>
                    <div class="slick">
                        <div>
                            <a>
                                <h4><small>Locomotoras de Diesel</small></h4>
                                <picture>
                                <a href="./Coleccion.php"> <img src="Coleccion/ColDiesel_05.jpg" alt="Image">
                                </picture>
                            </a>
                        </div>
                    </div>
                    <div class="slick">
                        <div>
                            <a>
                                <h4><small>Locomotoras Electricas</small></h4>
                                <picture>
                                <a href="./Coleccion.php"> <img src="Coleccion/ColElectricas_01.jpg" alt="Image">
                                </picture>
                            </a>
                        </div>
                    </div>
                    <div class="slick">
                        <div>
                            <a>
                                <h4><small>Locomotoras Electricas</small></h4>
                                <picture>
                                <a href="./Coleccion.php">  <img src="Coleccion/ColElectricas_03.jpg" alt="Image">
                                </picture>
                            </a>
                        </div>
                    </div>
                    <div class="slick">
                        <div>
                            <a>
                                <h4><small>Otros Vehiculos</small></h4>
                                <picture>
                                <a href="./Coleccion.php"><img src="Coleccion/ColOtros_01.jpg" alt="Image">
                                </picture>
                            </a>
                        </div>
                    </div>
                    <div class="slick">
                        <div>
                            <a>
                                <h4><small>Otros Vehiculos</small></h4>
                                <picture>
                                <a href="./Coleccion.php"> <img src="Coleccion/ColOtros_02.jpg" alt="Image">
                                </picture>
                            </a>
                        </div>
                    </div>
                    <div class="slick">
                        <div>
                            <a>
                                <h4><small>Otros Vehiculos</small></h4>
                                <picture>
                                <a href="./Coleccion.php"><img src="Coleccion/ColOtros_03.jpg" alt="Image">
                                </picture>
                            </a>
                        </div>
                    </div>
                    <div class="slick">
                        <div>
                            <a>
                                <h4><small>Otros Vehiculos</small></h4>
                                <picture>
                                <a href="./Coleccion.php"><img src="Coleccion/ColOtros_04.jpg" alt="Image">
                                </picture>
                            </a>
                        </div>
                    </div>
                    <div class="slick">
                        <div>
                            <a>
                                <h4><small>Otros Vehiculos</small></h4>
                                <picture>
                                <a href="./Coleccion.php"> <img src="Coleccion/ColOtros_07.jpg" alt="Image">
                                </picture>
                            </a>
                        </div>
                    </div>
                    <div class="slick">
                        <div>
                            <a>
                                <h4><small>Locomotora a Vapor</small></h4>
                                <picture>
                                <a href="./Coleccion.php"> <img src="Coleccion/ColVapor_01.jpg" alt="Image">
                                </picture>
                            </a>
                        </div>
                    </div>
                    <div class="slick">
                        <div>
                            <a>
                                <h4><small>Locomotora a Vapor</small></h4>
                                <picture>
                                <a href="./Coleccion.php"> <img src="Coleccion/ColVapor_02.jpg" alt="Image">
                                </picture>
                            </a>
                        </div>
                    </div>
                    <div class="slick">
                        <div>
                            <a>
                                <h4><small>Locomotora a Vapor</small></h4>
                                <picture>
                                <a href="./Coleccion.php"> <img src="Coleccion/ColVapor_03.jpg" alt="Image">
                                </picture>
                            </a>
                        </div>
                    </div>
                </div>
                <button class="slick-arrow slick-next" id="button-next" data-button="button-next" onclick="app.processingButton(event)">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" class="svg-inline--fa fa-chevron-right fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path></svg>
                </button>
            </div>
        </div>
    </main>

    <script src="Scripts/LandingPage.js" class="LandingPage"> </script>
    
    
 

</body>

<footer id="footer">
	<?php include 'Includes/footer.php'; ?>   
</footer>

</html>