<?php

$urlvideo = $_POST["url"];

$myfile = fopen("video.xml", "w");
$txt1 = '<?xml version="1.0" encoding="UTF-8" standalone="yes"?>
<root>
    <metavideo>
        <name>
        Curso de php
        </name>
        <url>';

$txt3 = ' </url>
        <type>
        video/mp4
        </type>
        <transcripcion>
          Esto es un ejemplo de una transcripcion...
        </transcripcion>
        <q144>
          video/identidades/144.mp4
        </q144>
        <q244>
          video/identidades/244.mp4
        </q244>
        <q360>
          video/identidades/360.mp4
        </q360>
        <q720>
          video/identidades/720hd.mp4
        </q720>
        <q1080>
          video/identidades/1080hd.mp4
        </q1080>
        <q1440>
          video/identidades/1440hd.mp4
        </q1440>

    </metavideo>
</root>';
fwrite($myfile, $txt1);
fwrite($myfile, $urlvideo);
fwrite($myfile, $txt3);
fclose($myfile);

echo "01";

?>