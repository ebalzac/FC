<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8"/>
    <title>Honoré de Balzac, éditon du Furne corrigé sur GitHub</title>
    <link rel="stylesheet" type="text/css" href="../Teinte/tei2html.css"/>
  </head>
  <body>
    <main id="center">
      <article id="article">
        <h1>Honoré de Balzac, <a href="https://github.com/honoredebalzac/FC">édition du Furne corrigée</a> en XML/TEI sur Github</h1>
        <ul>
          <?php
$glob = "*.xml";
foreach(glob($glob) as $srcfile) {
  echo "<li><a href=\"".$srcfile."\">";
  $xml = file_get_contents($srcfile);
  if ( preg_match("@<title>(.*?)</title>@", $xml, $matches) )
    echo $matches[1];
  else
    echo $srcfile;
  echo "</a></li>\n";
}

          ?>
        </ul>
      </article>
    </main>
  </body>
</html>
