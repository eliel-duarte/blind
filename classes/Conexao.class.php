<?php

    //Constantes para conexão com o banco de dados:
    define ("DB_SERVIDOR", "localhost");
    define ("LOGS_PATH", "logs/");    
    define ("DB_USUARIO", "u638147277_eliel");
    //define ("DB_SENHA", "naolembro");
    define ("DB_NOME", "u638147277_blind");

    class MySQLiConnection extends mysqli
    {
        public function __construct()
        {
            try
            {
                //@mysqli_connect (DB_SERVIDOR, DB_USUARIO, DB_SENHA, DB_NOME);
                parent::__construct (DB_SERVIDOR, DB_USUARIO, DB_SENHA, DB_NOME);
                if (mysqli_connect_errno() != 0)
                    throw new Exception (mysqli_connect_errno() . " - " . mysqli_connect_error());
            }
            catch (Exception $db_error)
            {
                $mensagem = $db_error->getMessage();
                $arquivo = $db_error->getFile();
                $data = date ("Y-m-d H:i:s");
                $ip_visitante = $_SERVER['REMOTE_ADDR'];
                
                if (!file_exists (LOGS_PATH))
                    mkdir (LOGS_PATH);
                
                // mensagem que será salva no arquivo de logs do banco de dados
                $log = $data . " | " . $mensagem . " | " . $arquivo . " | " . $ip_visitante . "\r\n\r\n";
                error_log ($log, 3, LOGS_PATH . "db_errors.log");
                echo "Erro ao conectar ao banco de dados MySQL. O erro foi reportado e o administrador do sistema tomará as devidas providências.";
                exit;
                
            }
        }
        
        
        public function __destruct()
        {
            if (mysqli_connect_errno() == 0)
                $this->close();
        }
        
    }

    $MySQL = new MySQLiConnection();

?>