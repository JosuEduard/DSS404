<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Delimitadores de código de PHP</title>
  <link rel="stylesheet" href="css/fonts.css" />
  <link rel="stylesheet" href="css/tabs.css" />
  <link rel="stylesheet" href="css/delimiters.css" />
</head>

<body>
  <header>
    <h1>Los delimitadores de código PHP</h1>
  </header>

  <section>
    <article>
      <div class="contenedor-tabs">
        <?php
        echo "<span class=\"diana\" id=\"una\"></span>\n";
        echo "<div class=\"tab\">\n";
        echo "<a href=\"#una\" class=\"tab-e\">Estilo XML</a>\n";
        echo "<div class=\"first\">\n";
        echo "<p class=\"xmltag\">\n";
        echo "Este texto está escrito en PHP, utilizando las etiquetas más ";
        echo "usuales y recomendadas para delimitar el código PHP, que son: ";
        echo "&lt;?php ... ?&gt;.<br>\n";
        echo "</p>\n";
        echo "</div>\n";
        echo "</div>\n";
        ?>
        <?php
        echo "<span class=\"diana\" id=\"dos\"></span>\n";
        echo "<div class=\"tab\">\n";
        echo "<a href=\"#dos\" class=\"tab-e\">Script</a>\n";
        echo "<div>\n";
        echo "<p class=\"htmltag\">\n";
        echo "A pesar de que estas líneas están escritas dentro de un script PHP, ";
        echo "Están enmarcadas dentro de etiquetas HTML: ";
        echo "&lt;script&gt; ... &lt;/script&gt;";
        echo "</p>\n";
        echo "</div>\n";
        echo "</div>\n";
        ?>
        <?php
        echo "<span class=\"diana\" id=\"tres\"></span>\n";
        echo "<div class=\"tab\">\n";
        echo "<a href=\"#tres\" class=\"tab-e\">Etiquetas cortas</a>";
        echo "<div>\n";
        echo "<p class=\"shorttag\">";
        echo "Este texto también está escrito con PHP, utilizando las etiquetas ";
        echo "cortas, <br>\n que son: &lt;? ... ?&gt;";
        echo "</p>\n";
        echo "</div>\n";
        echo "</div>\n";
        ?>
        <?php
        echo "<span class=\"diana\" id=\"cuatro\"></span>\n";
        echo "<div class=\"tab\">\n";
        echo "<a href=\"#cuatro\" class=\"tab-e\">Estilo ASP</a>";
        echo "<div>\n";
        echo "<p class=\"asptag\">";
        echo "Este texto está escrito en PHP, como los dos ejemplos anteriores. ";
        echo "Sin embargo, se ha delimitado con etiquetas estilo ASP: ";
        echo "&lt;% ... %&gt;.<br>\n";
        echo "</p>\n";
        echo "</div>\n";
        echo "</div>\n";
        ?>
      </div>
    </article>
    <article class="paragraph">
      <p>
        Usted está en la libertad de decidir cuál de estos delimitadores utilizará en sus scripts PHP. Sin embargo, la recomendación es utilizar siempre el primer tipo de delimitadores, conocido como delimitador estilo XML, a menos que no tenga otra opción.
      </p>
    </article>
  </section>
</body>
</html>