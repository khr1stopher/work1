<?php
// De:
$to = "kkromans009@gmail.com";
// para:
$from = "pckhris@localhost.com";
// asunto:
$subject = "Asunto del mail";
// ruta del archivo adjunto
$file = "/files/file.pdf";
// html content
$html_content = "<h1>Hello World</h1>";
// Nombre del remitente
$fromName = "khristopher";
// encabezado
$headers = "De: $fromName"." <".$from.">";

echo "working";