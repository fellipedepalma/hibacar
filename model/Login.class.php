<?php

class Login extends Conexao{
    private $user, $senha;

    function __construct(){
        parent::__construct();
    }

    function GetLogin($user, $senha){
        $this->setUser($user);
        $this->setSenha($senha);

        $query = "SELECT * FROM {$this->prefix}oficina WHERE ofc_email = :email AND ofc_pass = :senha";

        $params = array(
            ':email' => $this->getUser(),
            ':senha' => $this->getSenha(),
        );

        $this->ExecuteSQL($query, $params);

        if($this->TotalDados() > 0){
            $lista = $this->ListarDados();

            $_SESSION['OFC']['ofc_id']        = $lista['cli_id'];
            $_SESSION['OFC']['ofc_nome']      = $lista['cli_nome'];
            $_SESSION['OFC']['ofc_sobrenome'] = $lista['cli_sobrenome'];
            $_SESSION['OFC']['cli_endereco']  = $lista['cli_endereco'];
            $_SESSION['OFC']['cli_numero']    = $lista['cli_numero'];
            $_SESSION['OFC']['cli_bairro']    = $lista['cli_bairro'];
            $_SESSION['OFC']['cli_cidade']    = $lista['cli_cidade'];
            $_SESSION['OFC']['cli_uf']        = $lista['cli_uf'];
            $_SESSION['OFC']['cli_cpf']       = $lista['cli_cpf'];
            $_SESSION['OFC']['cli_cep']       = $lista['cli_cep'];
            $_SESSION['OFC']['cli_rg']        = $lista['cli_rg'];
            $_SESSION['OFC']['cli_ddd']       = $lista['cli_ddd'];
            $_SESSION['OFC']['cli_fone']      = $lista['cli_fone'];
            $_SESSION['OFC']['cli_email']     = $lista['cli_email'];
            $_SESSION['OFC']['cli_celular']   = $lista['cli_celular'];
            $_SESSION['OFC']['cli_data_nasc'] = $lista['cli_data_nasc'];
            $_SESSION['OFC']['cli_hora_cad']  = $lista['cli_hora_cad'];
            $_SESSION['OFC']['cli_data_cad']  = $lista['cli_data_cad'];
            $_SESSION['OFC']['cli_pass']      = $lista['cli_pass'];

            Rotas::Redirecionar(0, Rotas::pag_ClienteLogin());
        }else{
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

    function GetLoginAdmin($user,$senha){
        $this->setUser($user);
        $this->setSenha($senha);
        $query = "SELECT * FROM {$this->prefix}user WHERE user_email = :email AND user_pw = :senha";
        $params = array(':email'=>  $this->getUser(),
            ':senha'=>  $this->getSenha());
        $this->ExecuteSQL($query,$params);
        // caso o login seja efetivado com exito
        if($this->TotalDados() > 0):
            $lista = $this->ListarDados();
            $_SESSION['ADMIN']['user_id']    = $lista['user_id'];
            $_SESSION['ADMIN']['user_nome']  = $lista['user_nome'];
            $_SESSION['ADMIN']['user_email'] = $lista['user_email'];
            $_SESSION['ADMIN']['user_pw']    = $lista['user_pw'];
            $_SESSION['ADMIN']['user_data']  = Sistema::DataAtualBR();
            $_SESSION['ADMIN']['user_hora']  = Sistema::HoraAtual();
            return TRUE;
        // caso o login seja incorreto
        else:
            echo '<h4 class="alert alert-danger">Login incorreto </h4>';
            Rotas::Redirecionar(1,  'login.php');
            return FALSE;
        endif;
    }

    static function Logado(){
        if(isset($_SESSION['CLI']['cli_email']) && isset($_SESSION['CLI']['cli_id'])){
            return TRUE;
        }else{
            return FALSE;
        }
    }

    static function LogadoAdmin(){
        if(isset($_SESSION['ADMIN']['user_nome']) && isset($_SESSION['ADMIN']['user_id'])){
            return TRUE;
        }else{
            return FALSE;
        }
    }

    static function LogoffAdmin(){
        unset($_SESSION['ADMIN']);
        echo '<div class="fundoMensagem">
          <div class=" mensagem mensagem--alerta">
          <h1><i class="fas fa-exclamation-triangle"></i></i>
          Saindo...</h1>
          </div></div>';
        Rotas::Redirecionar(2, 'login.php');
    }

    static function Logoff(){
        unset($_SESSION['CLI']);
        echo '<div class="fundoMensagem">
          <div class=" mensagem mensagem--alerta">
          <h1><i class="fas fa-exclamation-triangle"></i></i>
          Saindo...</h1>
          </div></div>';
        Rotas::Redirecionar(2, Rotas::pag_ClienteLogin());
    }

    // FUNÇÃO PARA MOSTRAR MENU CLIENTE
    static function MenuCliente(){
        //verifica se não está Logado
        if(!self::Logado()):
            self::AcessoNegado();
            Rotas::Redirecionar(2, Rotas::pag_ClienteLogin());

            // Caso Não Redirecione, saiu do bloco.
            exit();

        //caso esteja mostrando a tela minha conta
        else:

            $smarty = new Template();
            $smarty->assign('PAG_CONTA', Rotas::pag_ClienteConta());
            $smarty->assign('PAG_CARRINHO', Rotas::pag_Carrinho());
            $smarty->assign('PAG_LOGOFF', Rotas::pag_Logoff());
            $smarty->assign('PAG_CLIENTE_PEDIDOS', Rotas::pag_ClientePedidos());
            $smarty->assign('PAG_CLIENTE_DADOS', Rotas::pag_ClienteDados());
            $smarty->assign('PAG_CLIENTE_SENHA', Rotas::pag_ClienteSenha());
            $smarty->assign('USER', $_SESSION['CLI']['cli_nome']);

            $smarty->display('menu_cliente.tpl');

        endif;
    }

    private function setUser($user){
        $this->user = $user;
    }

    private function setSenha($senha){
        $this->senha = /*Sistema::Criptografia(*/md5($senha);
    }

    function getUser(){
        return $this->user;
    }

    function getSenha(){
        return $this->senha;
    }
}

