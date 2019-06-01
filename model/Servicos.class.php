<?php

Class Servicos extends Conexao
{

    private $serv_id, $serv_nome, $serv_slug;

    function __construct()
    {
        parent::__construct();
    }

    function GetServicos()
    {
        // QUERY BUSCA CATEGORIAS
        $query = "SELECT * FROM {$this->prefix}servicos ORDER BY serv_nome";

        $this->ExecuteSQL($query);

        $this->GetListaServicos();

    }

    private function GetListaServicos()
    {
        $i = 1;
        while ($lista = $this->ListarDados()):
            $this->itens[$i] = array(
                'serv_id' => $lista['serv_id'],
                'serv_nome' => $lista['serv_nome'],
                'serv_slug' => $lista['serv_slug'],
                //'serv_link' => Rotas::pag_Servicos() . '/' . $lista['serv_id'] . '/' . $lista['serv_slug'],
            );
            $i++;
        endwhile;
    }

    function InserirServico($serv_nome){
        // trato os campos
        $this->setServ_nome($serv_nome);
        $this->setServ_slug($serv_nome);

        // monto a SQL
        $query = " INSERT INTO {$this->prefix}servicos (serv_nome, serv_slug)";
        $query.= " VALUES (:serv_nome, :serv_slug)";
        // passo so parametros
        $params = array(':serv_nome' => $this->getServ_nome(),
            ':serv_slug' => $this->getServ_slug(),
        );
        // executo a minha SQL
        if($this->ExecuteSQL($query, $params)):
            return TRUE;
        else:
            return FALSE;
        endif;
    }

    function EditarServicos($serv_id, $serv_nome){
        // trata os campos
        $this->setServ_nome($serv_nome);
        $this->setServ_slug($serv_nome);

        // monta a SQL
        $query = " UPDATE {$this->prefix}servicos ";
        $query.= " SET serv_nome = :serv_nome, serv_slug = :serv_slug";
        $query.= " WHERE serv_id = :serv_id";
        // passa so parametros
        $params = array(':serv_nome' => $this->getServ_nome(),
            ':serv_slug' => $this->getServ_slug(),
            ':serv_id'   => (int)$serv_id,
        );
        // executo a minha SQL
        if($this->ExecuteSQL($query, $params)):
            return TRUE;
        else:
            return FALSE;
        endif;
    }

    //MÉTODOS GET
    function getServ_nome() {
        return $this->serv_nome;
    }

    function getServ_slug() {
        return $this->serv_slug;
    }

    //MÉTODOS SET
    function setServ_nome($serv_nome) {
        $this->serv_nome = filter_var($serv_nome, FILTER_SANITIZE_STRING);
    }

    function setServ_slug($serv_slug) {
        $this->serv_slug = Sistema::GetSlug($serv_slug);
    }
}
