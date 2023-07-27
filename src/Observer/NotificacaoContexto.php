<?php

namespace Observer;

use Strategy\NotificacaoEstrategiaInterface;

class NotificacaoContexto
{
    private $observadores = [];
    private $estrategia;

    public function attach(Usuario $observador)
    {
        $this->observadores[] = $observador;
    }

    public function detach(Usuario $observador)
    {
        $index = array_search($observador, $this->observadores);
        if ($index !== false) {
            unset($this->observadores[$index]);
        }
    }

    public function notificarObservadores($mensagem)
    {
        foreach ($this->observadores as $observador) {
            $observador->notificar($this->estrategia, $mensagem);
        }
    }

    public function setEstrategia(NotificacaoEstrategiaInterface $estrategia)
    {
        $this->estrategia = $estrategia;
    }

    public function enviarNotificacao($mensagem)
    {
        $this->estrategia->enviar($mensagem);
        $this->notificarObservadores($mensagem);
    }
}
