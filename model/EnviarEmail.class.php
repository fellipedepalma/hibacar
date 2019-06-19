<?php
  
class EnviarEmail extends \PHPMailer\PHPMailer\PHPMailer {
    /**
   * inicializa a classe com os dados iniciais
   * @return void
   */
    function __construct() {
        parent::__construct();
		// Defino que é SMTP
        parent::IsSMTP();
        // Se é em HTML
	    parent::IsHTML(true);

        // Codificação charset padrão UTF-8
        $this->CharSet = 'UTF-8';

		// Modo debug 0 = off
        // 1 e 2 = Mostram informações do envio ou erros
        $this->SMTPDebug = 0;

		//Indica a porta do seu servidor
        $this->Port = Config::EMAIL_PORTA;

        //smtp.dominio.com.br //seu servidor smtp
        $this->Host = Config::EMAIL_HOST;

		// Define se tem ou autenticação no SMTP
        $this->SMTPAuth = Config::EMAIL_SMTPAUTH;

        // Define dados do remetendo EMAIL, SENHA da conta SMTP
        $this->FromName = Config::EMAIL_NOME;
        $this->From     = Config::EMAIL_USER;
        $this->Username = Config::EMAIL_USER;
        $this->Password = Config::EMAIL_SENHA;
    }

    /** * Envia o email propriamente dito
    * @return void
    * $setor = setor , $destinatario=email dominio, assunto, msg
    * $reply = email que vai a resposta
    */
    function Enviar($assunto, $msg, $destinatarios=array()) {
        //seto dados da mensagem
        $this->Subject = $assunto;
        $this->Body    = $msg;

        // email de resposta
        // $this->AddReplyTo($reply);
        // email para receber  uma cópia
        // $this->Addcc(Config::EMAIL_COPIA);
        //passando um laço para pegar todos os destinatarios
	    foreach($destinatarios as $email):
            $this->AddAddress($email, $email); //PARA MIM
        endforeach;

        //enviando o email
        if (parent::Send()):
            $_SESSION["sucesso"] = "Mensagem Enviada com Sucesso";
            $this->ClearAllRecipients();
            header("Location: index.php");
        else:
            echo "<h4>Mailer Error: " . $this->ErrorInfo . "</h4>";
        endif;
    }
}
