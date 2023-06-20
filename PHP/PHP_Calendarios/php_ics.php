<?php
// Fecha de inicio y fin del evento
$fechaInicio = '2023-06-20 10:00:00';
$fechaFin = '2023-06-20 12:00:00';

// Función para formatear la fecha y hora en el formato requerido por el archivo ICS
function formatearFecha($fecha) {
    return date('Ymd\THis', strtotime($fecha));
}

// Generar contenido del archivo ICS
$contenidoICS = "BEGIN:VCALENDAR
VERSION:2.0
PRODID:-//Your Company//NONSGML Event//EN
BEGIN:VEVENT
DTSTART:" . formatearFecha($fechaInicio) . "
DTEND:" . formatearFecha($fechaFin) . "
SUMMARY:Nombre del Evento
DESCRIPTION:Descripción del Evento
LOCATION:Lugar del Evento
END:VEVENT
END:VCALENDAR";

// Encabezados para descargar el archivo
header('Content-Type: text/calendar; charset=utf-8');
header('Content-Disposition: attachment; filename=evento.ics');

// Imprimir el contenido del archivo ICS
echo $contenidoICS;
?>
