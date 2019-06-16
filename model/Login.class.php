<?php

class Login extends Conexao{
    private $user, $senha;

    function __construct(){
        parent::__construct();
    }

    function GetLogin($user, $senha){
        $this->setUser($user);
        $this->setSenha($senha);

        $query = "SELECT * FROM {$this->prefix}oficina WHERE ofc_email = :email AND ofc_pass = :pass";

        $params = array(
            ':email' => $this->getUser(),
            ':pass' => $this->getSenha(),
        );

        $this->ExecuteSQL($query, $params);

        if($this->TotalDados() > 0){
            $lista = $this->ListarDados();


            $_SESSION['OFC']['ofc_id']        = $lista['ofc_id'];
            $_SESSION['OFC']['ofc_nome']      = $lista['ofc_nome'];
            $_SESSION['OFC']['ofc_descricao'] = $lista['ofc_descricao'];
            $_SESSION['OFC']['ofc_logo']      = $lista['ofc_logo'];
            $_SESSION['OFC']['ofc_email']     = $lista['ofc_email'];
            $_SESSION['OFC']['ofc_pass']      = $lista['ofc_pass'];
            $_SESSION['OFC']['ofc_telefone']  = $lista['ofc_telefone'];
            $_SESSION['OFC']['ofc_celular']   = $lista['ofc_celular'];
            $_SESSION['OFC']['ofc_site']      = $lista['ofc_site'];
            $_SESSION['OFC']['ofc_endereco']  = $lista['ofc_endereco'];
            $_SESSION['OFC']['ofc_numero']    = $lista['ofc_numero'];
            $_SESSION['OFC']['ofc_complemento'] = $lista['ofc_complemento'];
            $_SESSION['OFC']['ofc_bairro'] = $lista['ofc_bairro'];
            $_SESSION['OFC']['ofc_uf'] = $lista['ofc_uf'];
            //echo 'Login Efetuado';
           // var_dump($_SESSION['OFC']['ofc_email']);

            Rotas::Redirecionar(0, Rotas::pag_Oficina());
        }else{
            //echo 'Login não efetuado';
        }
    }

    static function AcessoNegado(){
        echo "<div class='mensagem mensagem-erro'>
            <div class='mensagem-corpo'>
                <div class='mensagem-status'>
                    <i class=\"fas fa-times\"></i>
                </div>
                <div class='mensagem-texto'>
                    <div class='mensagem-titulo'>Acesso Negado!</div>
                    <div class='mensagem-subtitulo'>Você precisa realizar login.</div>
                </div>
            </div>
            <div class='mensagem-fechar'>
                <i class=\"fas fa-times\" onclick=\"hide()\"></i>
            </div>
          </div>";
    }

//    function GetLoginAdmin($user,$senha){
//        $this->setUser($user);
//        $this->setSenha($senha);
//        $query = "SELECT * FROM {$this->prefix}user WHERE user_email = :email AND user_pw = :senha";
//        $params = array(':email'=>  $this->getUser(),
//            ':senha'=>  $this->getSenha());
//        $this->ExecuteSQL($query,$params);
//        // caso o login seja efetivado com exito
//        if($this->TotalDados() > 0):
//            $lista = $this->ListarDados();
//            $_SESSION['ADMIN']['user_id']    = $lista['user_id'];
//            $_SESSION['ADMIN']['user_nome']  = $lista['user_nome'];
//            $_SESSION['ADMIN']['user_email'] = $lista['user_email'];
//            $_SESSION['ADMIN']['user_pw']    = $lista['user_pw'];
//            $_SESSION['ADMIN']['user_data']  = Sistema::DataAtualBR();
//            $_SESSION['ADMIN']['user_hora']  = Sistema::HoraAtual();
//            return TRUE;
//        // caso o login seja incorreto
//        else:
//            echo '<h4 class="alert alert-danger">Login incorreto </h4>';
//            Rotas::Redirecionar(1,  'login.php');
//            return FALSE;
//        endif;
//    }

    static function Logado(){
        if(isset($_SESSION['OFC']['ofc_email']) && isset($_SESSION['OFC']['ofc_id'])){
            return TRUE;
        }else{
            return FALSE;
        }
    }

//    static function LogadoAdmin(){
//        if(isset($_SESSION['ADMIN']['user_nome']) && isset($_SESSION['ADMIN']['user_id'])){
//            return TRUE;
//        }else{
//            return FALSE;
//        }
//    }

//    static function LogoffAdmin(){
//        unset($_SESSION['ADMIN']);
//        echo '<div class="fundoMensagem">
//          <div class=" mensagem mensagem--alerta">
//          <h1><i class="fas fa-exclamation-triangle"></i></i>
//          Saindo...</h1>
//          </div></div>';
//        Rotas::Redirecionar(2, 'login.php');
//    }

    static function Logoff(){
        unset($_SESSION['OFC']);
        echo '<div class="fundoMensagem">
          <div class=" mensagem mensagem--alerta">
          <h1><i class="fas fa-exclamation-triangle"></i></i>
          Saindo...</h1>
          </div></div>';
        Rotas::Redirecionar(2, Rotas::get_SiteHOME());
    }

    private function setUser($user){
        $this->user = $user;
    }

    private function setSenha($senha){
        $this->senha = /*Sistema::Criptografia(*/$senha;
    }

    function getUser(){
        return $this->user;
    }

    function getSenha(){
        return $this->senha;
    }
}

