<?php

namespace Strategy;

class NotificacaoEmail implements NotificacaoEstrategiaInterface
{
    public function enviar($mensagem)
    {
        echo "Notificação de nova mensagem enviada por e-mail: {$mensagem}\n";
    }
}
