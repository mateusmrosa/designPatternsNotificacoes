<?php

namespace Observer;

use Strategy\NotificacaoEstrategiaInterface;

class Usuario
{
    private $nome;

    public function __construct($nome)
    {
        $this->nome = $nome;
    }

    public function notificar(NotificacaoEstrategiaInterface $notificacao, $mensagem)
    {
        echo "Usuário {$this->nome} recebeu uma notificação: {$mensagem}\n";
    }
}
