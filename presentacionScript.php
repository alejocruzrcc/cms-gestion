<?php

// Estructura de carpetas
$estructura = './project-activity/metadatos';
mkdir($estructura, 0777, true);

$urlpresentacion = $_POST["url"];

// Creacion y escritura de archivo pdf.js

$newjspdf = fopen("project-activity/js/pdf.js", "w") or die("Unable to open file!");

$jspdf = fopen("presentacion/pdf.js", "r") or die("Unable to open file!");
$readjspdf =  fread($jspdf,filesize("presentacion/pdf.js"));
fclose($jspdf);

fwrite($newjspdf, $readjspdf);
fclose($newjspdf);

// Creacion y escritura de archivo pdf.worker.js

$newjspdfwork = fopen("project-activity/js/pdf.worker.js", "w") or die("Unable to open file!");

$jspdfwork = fopen("presentacion/pdf.worker.js", "r") or die("Unable to open file!");
$readjspdfwork =  fread($jspdfwork,filesize("presentacion/pdf.worker.js"));
fclose($jspdfwork);

fwrite($newjspdfwork, $readjspdfwork);
fclose($newjspdfwork);

// Creacion y escritura de archivo controller.js

$newjscontroller = fopen("project-activity/js/controller.js", "w") or die("Unable to open file!");

$jscontroller = fopen("presentacion/controller.js", "r") or die("Unable to open file!");
$readjscontroller =  fread($jscontroller,filesize("presentacion/pdf.js"));
fclose($jscontroller);

fwrite($newjscontroller, $readjscontroller);
fclose($newjscontroller);

// Creacion y escritura de archivo presentacion.js

$newjspresentacion = fopen("project-activity/js/presentacion.js", "w") or die("Unable to open file!");

$jspresentacion = fopen("presentacion/presentacion.js", "r") or die("Unable to open file!");
$readjspresentacion =  fread($jspresentacion,filesize("presentacion/presentacion.js"));
fclose($jspresentacion);

fwrite($newjspresentacion, $readjspresentacion);
fclose($newjspresentacion);

// Creacion y escritura de archivo presentacion.html

$newhtmlpresentacion = fopen("project-activity/presentacion.html", "w") or die("Unable to open file!");

$htmlpresentacion = fopen("presentacion/presentacion.html", "r") or die("Unable to open file!");
$readhtmlpresentacion =  fread($htmlpresentacion,filesize("presentacion/presentacion.html"));
fclose($htmlpresentacion);

fwrite($newhtmlpresentacion, $readhtmlpresentacion);
fclose($newhtmlpresentacion);


// Creacion y escritura de archivo presentacion.xml

$newxmlpresentacion = fopen("project-activity/metadatos/presentacion.xml", "w") or die("Unable to open file!");

$readxmlpresentacion1 =  '<?xml version="1.0" encoding="UTF-8" standalone="yes"?>
<root>
    <metadoc>
        <name>
        Presntacion Multimedia
        </name>
        
        <url>';

$readxmlpresentacion2 = '</url>
    </metadoc>
</root>';



fwrite($newxmlpresentacion, $readxmlpresentacion1);
fwrite($newxmlpresentacion, $urlpresentacion);
fwrite($newxmlpresentacion, $readxmlpresentacion2);
fclose($newxmlpresentacion);


$urlpresentacion = $_POST["url"];


echo "01";

?>