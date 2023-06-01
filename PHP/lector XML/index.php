<?php
$rss_url = "https://www.applesfera.com/feedburner.xml";

$xml = simplexml_load_file($rss_url);

if ($xml) {
  $channel = $xml->channel;

  echo "<h1>" . $channel->title . "</h1>";
  echo "<p>" . $channel->description . "</p>";

  foreach ($channel->item as $item) {
    echo "<h2><a href='" . $item->link . "'>" . $item->title . "</a></h2>";
  }
} else {
  echo "No se pudo cargar el feed RSS.";
}
?>
Este código carga el archivo XML del feed RSS y utiliza la función simplexml_load_file() para convertirlo en un objeto SimpleXML. Luego, recorre cada elemento <item> del feed y muestra el título y el enlace.

Recuerda que este código solo muestra los títulos y enlaces de los artículos. Puedes adaptarlo según tus necesidades para mostrar más información, como la descripción o la fecha de publicación de cada artículo.






