<?php

namespace Factory;

use Strategy\NotificacaoEmail;
use Strategy\NotificacaoApp;

class NotificacaoFactory
{
    public function criarNotificacao($tipo)
    {
        switch ($tipo) {
            case 'email':
                return new NotificacaoEmail();
            case 'app':
                return new NotificacaoApp();
            default:
                throw new \Exception("Tipo de notificação inválido");
        }
    }
}
