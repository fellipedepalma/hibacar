<?php

class Oficina extends Conexao {
    private $ofc_id, $ofc_nome, $ofc_descricao, $ofc_logo, $ofc_email, $ofc_pass, $ofc_telefone, $ofc_celular, $ofc_site, $ofc_endereco, $ofc_numero, $ofc_complemento, $ofc_bairro, $ofc_cidade, $ofc_uf, $lat, $lng;

    function __construct()
    {
        parent::__construct();
    }

    function GetOficina(){
        $query = "SELECT * FROM {$this->prefix}oficina";
        $this->ExecuteSQL($query);
        $this->GetListaOficina();
    }

    private function GetListaOficina(){
        $i = 0;
        while($lista = $this->ListarDados()):
            $this->itens[$i] = array(
                'ofc_id'          => $lista['ofc_id'],
                'ofc_nome'        => $lista['ofc_nome'],
                'ofc_descricao'   => $lista['ofc_descricao'],
                'ofc_logo'        => $lista['ofc_logo'],
                'ofc_email'       => $lista['ofc_email'],
                'ofc_pass'        => $lista['ofc_pass'],
                'ofc_telefone'    => $lista['ofc_telefone'],
                'ofc_celular'     => $lista['ofc_celular'],
                'ofc_site'        => $lista['ofc_site'],
                'ofc_endereco'    => $lista['ofc_endereco'],
                'ofc_numero'      => $lista['ofc_numero'],
                'ofc_complemento' => $lista['ofc_complemento'],
                'ofc_bairro'      => $lista['ofc_bairro'],
                'ofc_cidade'      => $lista['ofc_cidade'],
                'ofc_uf'          => $lista['ofc_uf'],
                'lat'             => $lista['lat'],
                'lng'             => $lista['lng']
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