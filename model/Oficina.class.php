<?php

class Oficina extends Conexao {
    private $ofc_id, $ofc_nome, $ofc_descricao, $ofc_logo, $ofc_email, $ofc_pass, $ofc_telefone, $ofc_celular, $ofc_site, $ofc_endereco, $ofc_numero, $ofc_complemento, $ofc_bairro, $ofc_cidade, $ofc_uf, $ofc_cep, $lat, $lng;

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
                'ofc_cep'          => $lista['ofc_cep'],
                'lat'             => $lista['lat'],
                'lng'             => $lista['lng']
            );
        $i++;
        endwhile;
    }

    //FUNCAO PARA EDITAR OS OFICINAS
    function Editar($id){
        // caso passou na verificação grava no banco
        $query = " UPDATE {$this->prefix}oficina SET ofc_nome=:ofc_nome, ofc_descricao=:ofc_descricao, ofc_logo=:ofc_logo, ofc_email=:ofc_email, ofc_pass=:ofc_pass, ofc_telefone=:ofc_telefone, ofc_celular=:ofc_celular, ofc_site=:ofc_site, ofc_endereco=:ofc_endereco, ofc_numero=:ofc_numero, ofc_complemento=:ofc_complemento, ofc_bairro=:ofc_bairro, ofc_cidade=:ofc_cidade, ofc_uf=:ofc_uf, ofc_cep=:ofc_cep, lat=:lat, lng=:lng";
        $query .=" WHERE  ofc_id = :ofc_id";

        $params = array(
            ':ofc_nome'     => $this->getOfc_nome(),
            ':ofc_descricao' => $this->getOfc_descricao(),
            ':ofc_logo' => $this->getOfc_logo(),

            ':ofc_id'       => (int)$id
        );

        //  echo $query;
        if($this->ExecuteSQL($query, $params)):
            return true;
        else:
            return false;
        endif;
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