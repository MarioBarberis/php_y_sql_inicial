<?php

include('navegador.php');

?>

<section class="serv_contenido">

    <p class="parrafo">Los servicios de belleza son todas aquellas actividades que se realizan con el fin de modificar temporalmente la apariencia estética del cuerpo humano a nivel del cabello, cuero cabelludo y uñas.

El texto objeto de análisis, Servicio de belleza, publicado por la Editorial Pueblo y Educación en el año 2019, viene a llenar un vacío bibliográfico dentro de la disciplina Servicios de belleza de la Enseñanza Técnico Profesional (ETP).

La autora Marelis Proenza Brown, Guantánamo, 1959), es Licenciada en Economía, estilista profesional con más de 30 años de experiencia en la profesión, autora de los libros como: El Arte de la Peluquería, 2013 por la editorial Oriente, Recetas Caseras de Belleza por la editorial El Mar y la Montaña. 2016, Aprenda a Maquillarse 2017 por la editorial Oriente. El Arte de la Peluquería. Segunda edición, por la editorial El Mar y la Montaña. Publicó un artículo titulado: Aportes del cuentapropista al desarrollo local, partiendo del conocimiento para crear capacidades y competencia, en la multimedia interactiva Memorias Tecnogest 2015. Se graduó de Especialista Universitario en Cosmética y Dermofarmacia de la Universidad Miguel de Cervantes de España y Especialista en Medicina Estética: Tratamientos Faciales de Euroinnova un centro de diplomados de España. Es una activa promotora de temas de belleza en la radio y en la televisión. Imparte cursos en la Casa de Orientación a la Mujer y la Familia de su provincia.

Su libro Servicio de belleza es de vital importancia para todos los miembros de la sociedad cubana, es una bibliografía de consulta para dar tratamiento a este tema en las diferentes instituciones de este tipo de enseñanza (ETP) e incluso para uso personal.

La escritora, partiendo de sus experiencias personales, y en coordinación con el Ministerio de Educación, fundamentalmente la Enseñanza Técnico Profesional (ETP), logró compendiar sus libros anteriores surgiendo así Servicio de belleza donde muestra cómo preparar a los jóvenes para participar en el mercado laboral actual. Es un material de consulta para los servicios en la especialidad del mismo nombre.

En él se muestran ejemplos sencillos, claros y concretos de cómo despertar y mantener el interés del cliente entre otros temas y contribuir así al mejoramiento de habilidades comunicativas en la prestación de servicios sin apartarse de las condiciones actuales de nuestro país. Por tanto, la aplicación práctica de sus mensajes facilitará el logro de una prestación de servicio eficiente, con todo el respeto que nuestro pueblo merece.

El texto revela claridad, coherencia, y concisión en sus temas. Cuenta con una introducción donde se hace un recuento histórico de la Cosmetología en Egipto, Grecia, Roma, los pueblos bárbaros, La Edad Media, El Renacimiento, El Barroco, Siglo xix y xx, y por último realiza una breve reseña de la peluquería en Cuba: su surgimiento y desarrollo.

Está estructurado en catorce capítulos abordando temas como la peluquería y la imagen del profesional; normas de seguridad e higiene de peluqueros y barberos; el cabello su lavado, corte, selección del champú, acondicionadores y tratamiento del mismo; maquillaje, cuidado de la piel y el rostro; brinda algunas recetas naturales para la piel y el rostro así como para el cuidado del cabello; ofrece una relación de plantas medicinales con sus nombre común y científico; brinda información sobre las herramientas y accesorios de trabajo para desempeñar el oficio.

La comercialización de los libros anteriores que fueron la premisa para esta nueva obra fue significativa y decisoria, lo cual refleja su importancia y aceptación por parte de toda la población deseosa por conocer sobre estos temas que, aunque son muy útiles, precisan de un manejo responsable y profesional para cuidar la apariencia personal de todos. Culmino el análisis del texto con una frase que identifica a la autora:

“La belleza complace a los ojos, enaltece el alma y conquista el corazón”</p>

<h1 class="tituloserv">SERVICIOS DISPONIBLES EN NUESTRO RETIRO DE DESCANSO:</h1>

    <ul>
        <li> <a href="servicios.php?servicios=masajes">Masajes</a></li>
        <li> <a href="servicios.php?servicios=sauna">Sauna</a></li>
        <li> <a href="servicios.php?servicios=belleza">Belleza Facial</a></li>
    </ul>

</section>

<?php

$nombre = '';
$descripcion = '';
$precio = '';
$img = '';

if (isset($_GET['servicios'])) {
    switch ($_GET['servicios']) {
        case 'masajes':
            $nombre = 'Masajes Relajantes';
            $descripcion = 'Descripcion: El masaje total consiste en una manipulación gradual del cuerpo para estimular sus diferentes partes, una a la vez. Por lo general, el masajista comienza desde los pies y sube lentamente las piernas, la espalda, los brazos, los hombros, finalmente el cuello y la cabeza.';
            $precio = 'Precio: $2000';
            $img = './img/masajes.jpg';
            break;
        case 'sauna':
            $nombre = 'Sauna Tibetano';
            $descripcion = 'Descripcion: El calor de la sauna mejora la circulación de la sangre rica en oxígeno y nutrientes por todo el cuerpo. Esto, a su vez, ayuda a que los músculos dañados por el ejercicio se reparen, para que puedas volver al sillón más rápido.';
            $precio = 'Precio: $2400';
            $img = './img/sauna.jpg';
            break;
        case 'belleza':
            $nombre = 'Belleza Facial';
            $descripcion = 'Descripcion: La estética facial se centra en el rejuvenecimiento, embellecimiento de la cara y cuello, corrigiendo rasgos para que puedan mejorar la belleza del rostro mediante técnicas no invasivas.';
            $precio = 'Precio: $3700';
            $img = './img/belleza.jpg';
            break;
    }
}
?>

<div class="serv_descripcion">
    <h2> <span class="resaltar"><?php echo $nombre; ?></span> </h2>
    <h3> <?php echo $descripcion; ?> </h3>
    <h3> <?php echo $precio; ?> </h3>
    <div class="cont_img">
       <img src="<?php echo $img ?>" alt="<?php echo $nombre ?>">
    </div>
</div>

</body>

</html>