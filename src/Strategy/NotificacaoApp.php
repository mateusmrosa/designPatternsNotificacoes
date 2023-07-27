<?php

namespace Strategy;

class NotificacaoApp implements NotificacaoEstrategiaInterface
{
    public function enviar($mensagem)
    {
        echo "Notificação de nova mensagem enviada pelo aplicativo móvel: {$mensagem}\n";
    }
}
