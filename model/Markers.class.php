<?php
class Markers extends Conexao{
    private $ofc_id, $ofc_nome, $ofc_endereco, $ofc_lat, $ofc_long, $ofc_tipo;

    function __construct()
    {
        parent::__construct();
    }

    function parseToXML($htmlStr)
    {
        $xmlStr=str_replace('<','&lt;',$htmlStr);
        $xmlStr=str_replace('>','&gt;',$xmlStr);
        $xmlStr=str_replace('"','&quot;',$xmlStr);
        $xmlStr=str_replace("'",'&#39;',$xmlStr);
        $xmlStr=str_replace("&",'&amp;',$xmlStr);
        return $xmlStr;
    }

    function GetMarcacao(){
        $query = "SELECT * FROM {$this->prefix}markers";
        $this->ExecuteSQL($query);
        $this->GetListaMarkers();
    }

    private function GetListaMarkers(){
/*        echo "<?xml version='1.0' ?>";*/
        //echo '<markers>';
        $i = 0;
        //header("Content-type: text/xml");
        while($lista = $this->ListarDados()):
            $this->itens[$i] = array(
                'ofc_id'       => $lista['id'],
                'ofc_nome'     => $lista['name'],
                'ofc_endereco' => $lista['address'],
                'ofc_lat'      => $lista['lat'],
                'ofc_long'     => $lista['lng'],
                'ofc_tipo'     => $lista['type']

            );
        $i++;
        endwhile;
    }

    //MÉTODO GET
    function __get($name)
    {
        return $this->$name;
    }

    //MÉTODO SET
    function __set($name, $value)
    {
        $this->$name = $value;
    }
}