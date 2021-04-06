
<?php

echo 'METODOS DE INSPECCION DE ELEMENTOS DE HTML CON PHP <br><br><br><br>';

echo "para todos los metodos se requiere : require './simple_html_dom.php'; <br><br><br><br>";

echo '* USANDO file_get_html <br><br>';





require './simple_html_dom.php';
//include("simple_html_dom.php");

//$url = 'http://201.234.124.219/infoworker/FrmLogin.aspx';
$url = 'https://es-la.facebook.com/';

$html = file_get_html($url);

$titulo = $html->find("title",0)->innertext;

echo $titulo;

foreach ($html->find(".TextoLogueo") as $elemento){
    echo "<p>$elemento</p>";
}

foreach ($html->find("a") as $elementos){
    echo "<p>".$elementos->href."</p>";
}

echo '<br><br><br><br><br><br>';

//***************************************************
//***************************************************
//***************************************************
//***************************************************

echo '* USANDO file_get_contents <br><br>';




//include("simple_html_dom.php");

$url = 'https://es-la.facebook.com/';// url el q deseas inspeccionar
$html = file_get_contents($url);

preg_match_all('/<a href="(.*?)"/', $html, $matches);

echo 'localizar elementos con "a href" : <br><br>';
print_r($matches);





