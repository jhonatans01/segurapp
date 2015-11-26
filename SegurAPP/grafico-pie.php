<?php

require_once './conexao.php';
//Include the code
require_once './phplot/phplot.php';
//Define the object
$plot = new PHPlot();

$buscar = mysql_query("SELECT count(id), bairro FROM "
        . " ocorrencia GROUP BY bairro ORDER BY count(id) DESC");

$data = array();

while ($ver = mysql_fetch_array($buscar)) {
    $data[] = array($ver['bairro'], $ver['count(id)']);
}

$plot->SetTitleColor('blue');
//$plot->SetTitle("");


$plot->SetImageBorderType('plain');

#$plot->SetBackgroundColor('YellowGreen');

$plot->SetPlotType('pie');

$plot->SetDataType('text-data-single');

$plot->SetDataValues($data);

foreach ($data as $row)
    $plot->SetLegend($row[0]); // Copy labels to legend

$plot->DrawGraph();
?>