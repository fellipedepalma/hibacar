<?php
$smarty = new Template();

$oficina = new Oficina();
$oficina->GetOficina();
$marcacao = new Markers();
$marcacao->GetMarcacao();



//// Select all the rows in the markers table
//$query = "SELECT * FROM hcar_markers";
//$result = mysqli_query($query);
//if (!$result) {
//    die('Invalid query: ' . mysqli_error());
//}

//header("Content-type: text/xml");

// Start XML file, echo parent node

//$ind=0;
// Iterate through the rows, printing XML nodes for each
//while ($row = @mysqli_fetch_assoc($result)){
//    // Add to XML document node
//    echo '<marker ';
//    echo 'id="' . $row['id'] . '" ';
//    echo 'name="' . parseToXML($row['name']) . '" ';
//    echo 'address="' . parseToXML($row['address']) . '" ';
//    echo 'lat="' . $row['lat'] . '" ';
//    echo 'lng="' . $row['lng'] . '" ';
//    echo 'type="' . $row['type'] . '" ';
//    echo '/>';
//    $ind = $ind + 1;
//}
////
////// End XML file
//echo '</markers>';

$smarty->assign('NOME-SITE', "HibaCar");
$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());
$smarty->assign('GET_HOME', Rotas::get_SiteHOME());
$smarty->assign('OFICINA', $oficina->GetItens());
$smarty->display('buscaroficina.tpl');