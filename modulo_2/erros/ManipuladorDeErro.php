<?php

class ManipuladorDeErro
{

    private $logFile;

    // Construtor para definir o arquivo de log
    public function __construct($logFile)
    {
        $this->logFile = $logFile;

        // Configura o manipulador de erros
        set_error_handler([$this, "logError"]);

        // Opcional: também pode configurar o manipulador de exceções
        set_exception_handler([$this, "logException"]);
    }

    // Metodo para processar e logar os erros
    public function logError($errno, $errstr, $errfile, $errline)
    {
        // Se o erro não for um tipo que queremos capturar, ignorá-lo
        if (!(error_reporting() & $errno)) {
            return;
        }

        // Formatar a mensagem de erro
        date_default_timezone_set('America/Sao_Paulo');
        $data = date("Y-m-d H:i:s", time());
        $mensagem = "[$data] Erro [$errno]: $errstr - $errfile:$errline\n";
        $mensagem .= "--------------------\n";

        // Escrever no arquivo de log
        file_put_contents($this->logFile, $mensagem, FILE_APPEND);
    }

    // Metodo para processar e logar as exceções
    public function logException($exception)
    {
        // Formatar a mensagem da exceção
        $data = date("Y-m-d H:i:s");
        $mensagem = "[$data] Exceção: " . $exception->getMessage() . "\n";
        $mensagem .= "Arquivo: " . $exception->getFile() . " - Linha: " . $exception->getLine() . "\n";
        $mensagem .= "Stack trace:\n" . $exception->getTraceAsString() . "\n";
        $mensagem .= "--------------------\n";

        // Escrever no arquivo de log
        file_put_contents($this->logFile, $mensagem, FILE_APPEND);
    }


}
