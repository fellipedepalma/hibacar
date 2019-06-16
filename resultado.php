<?php

require("conexao.php");



function parseToXML($htmlStr){
    $xmlStr=str_replace('<','&lt;',$htmlStr);
    $xmlStr=str_replace('>','&gt;',$xmlStr);
    $xmlStr=str_replace('"','&quot;',$xmlStr);
    $xmlStr=str_replace("'",'&#39;',$xmlStr);
    $xmlStr=str_replace("&",'&amp;',$xmlStr);
    return $xmlStr;
}

// Select all the rows in the markers table
// Query pra pegar os dados, no caso, aqui vai ser aquela tabela onde vai ser inserido
// No caso, nessa query vai ter que ser inserido, uma união pegando tudo da "Hcar_Oficina" e a "Hcar_Servico"
// Onde vai ter o filtro tambem de pegar o tal serviço.
$result_markers = 'SELECT hcar_oficina.ofc_nome, hcar_servicos.serv_nome, hcar_oficina.ofc_endereco , hcar_oficina.lat, hcar_oficina.lng FROM hcar_ofc_serv 
INNER JOIN hcar_oficina 
ON hcar_ofc_serv.id = hcar_oficina.ofc_id
INNER JOIN hcar_servicos
ON hcar_ofc_serv.serv_id = hcar_servicos.serv_id
WHERE hcar_servicos.serv_id = 7;';

$resultado_markers = mysqli_query($conn, $result_markers);

header("Content-type: text/xml");

// Start XML file, echo parent node
echo '<markers>';

// Iterate through the rows, printing XML nodes for each
while ($row_markers = mysqli_fetch_assoc($resultado_markers)){
    // Add to XML document node
    echo '<marker ';
    echo 'name="' . parseToXML($row_markers['ofc_nome']) . '" ';
    echo 'address="' . parseToXML($row_markers['ofc_endereco']) . '" ';
    echo 'lat="' . $row_markers['lat'] . '" ';
    echo 'lng="' . $row_markers['lng'] . '" ';
    echo '/>';
}

// End XML file
echo '</markers>';
