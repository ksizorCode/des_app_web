<h1>Link a Google Calendar</h1>

<?php
// Detalles del evento
$tituloEvento = 'Mi evento';
$descripcionEvento = 'Descripción del evento';
$ubicacionEvento = 'Lugar del evento';
$fechaInicio = '2023-06-20T10:00:00';
$fechaFin = '2023-06-20T12:00:00';

// Codificar los detalles del evento para incluirlos en la URL
$tituloCodificado = urlencode($tituloEvento);
$descripcionCodificada = urlencode($descripcionEvento);
$ubicacionCodificada = urlencode($ubicacionEvento);
$fechaInicioCodificada = urlencode($fechaInicio);
$fechaFinCodificada = urlencode($fechaFin);

// Generar la URL de Google Calendar
$urlGoogleCalendar = "https://calendar.google.com/calendar/render?action=TEMPLATE&text={$tituloCodificado}&details={$descripcionCodificada}&location={$ubicacionCodificada}&dates={$fechaInicioCodificada}/{$fechaFinCodificada}";

// Imprimir la URL de Google Calendar
echo $urlGoogleCalendar;
?>