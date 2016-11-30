<?php
// Estructura de carpetas
$estructura = './project-activity';
mkdir($estructura, 0777, true);
$estructura1 = './project-activity/css';
mkdir($estructura1, 0777, true);
$estructura2 = './project-activity/js';
mkdir($estructura2, 0777, true);
$estructura2 = './project-activity/fonts';
mkdir($estructura2, 0777, true);

// Creacion y escritura de archivo materialize.css

$newcssmaterialize = fopen("project-activity/css/materialize.css", "w") or die("Unable to open file!");

$ccsmaterialize = fopen("css/materialize.css", "r") or die("Unable to open file!");
$readcssmaterialize =  fread($ccsmaterialize,filesize("css/materialize.css"));
fclose($ccsmaterialize);

fwrite($newcssmaterialize, $readcssmaterialize);
fclose($newcssmaterialize);

// Creacion y escritura de archivo materialize.min.css

$newminmaterial = fopen("project-activity/css/materialize.min.css", "w") or die("Unable to open file!");

$minmaterial = fopen("css/materialize.min.css", "r") or die("Unable to open file!");
$readminmaterial =  fread($minmaterial,filesize("css/materialize.min.css"));
fclose($minmaterial);

fwrite($newminmaterial, $readminmaterial);
fclose($newminmaterial);

// Creacion y escritura de archivo materialize.js

$newjsmaterialize = fopen("project-activity/js/materialize.js", "w") or die("Unable to open file!");

$jsmaterialize = fopen("js/materialize.js", "r") or die("Unable to open file!");
$readjsmaterialize =  fread($jsmaterialize,filesize("js/materialize.js"));
fclose($jsmaterialize);

fwrite($newjsmaterialize, $readjsmaterialize);
fclose($newjsmaterialize);

// Creacion y escritura de archivo materialize.min.js

$newjsminmaterial = fopen("project-activity/js/materialize.min.js", "w") or die("Unable to open file!");

$minjsmaterial = fopen("js/materialize.min.js", "r") or die("Unable to open file!");
$readjsminmaterial =  fread($minjsmaterial,filesize("js/materialize.min.js"));
fclose($minjsmaterial);

fwrite($newjsminmaterial, $readjsminmaterial);
fclose($newjsminmaterial);

//echo  " Archivo Generado. <a href=" . $myfile . ">Descarga</a>";

echo "01";


?> 