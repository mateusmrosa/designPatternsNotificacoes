<?php

require_once './src/Factory/NotificacaoFactory.php';

require_once './src/Observer/Usuario.php';
require_once './src/Observer/NotificacaoContexto.php';

require_once 'src/Strategy/NotificacaoEstrategiaInterface.php';
require_once './src/Strategy/NotificacaoEmail.php';
require_once './src/Strategy/NotificacaoApp.php';

use Factory\NotificacaoFactory;
use Observer\Usuario;
use Observer\NotificacaoContexto;
use Strategy\NotificacaoEmail;
use Strategy\NotificacaoApp;

// testando o projeto
$notificacaoFactory = new NotificacaoFactory();
$usuario1 = new Usuario("João");
$usuario2 = new Usuario("Maria");

$contexto = new NotificacaoContexto();

// inscricao dos usuarios para notificacoes
$contexto->setEstrategia(new NotificacaoEmail());
// notificacao de nova mensagem enviada por email
$contexto->enviarNotificacao("<b>Nova mensagem de teste via e-mail</b>");
echo "<br><br>";
$contexto->setEstrategia(new NotificacaoApp());
// notificacao de nova mensagem enviada pelo aplicativo móvel
$contexto->enviarNotificacao("<b>Nova mensagem de teste via aplicativo</b>");
echo "<br><br>";
$mensagem = "Nova mensagem de teste para notificar!";
// usuario João recebeu uma notificação
$usuario1->notificar(new NotificacaoEmail(), $mensagem);
echo "<br><br>";
// maria recebu notificacao
$usuario2->notificar(new NotificacaoEmail(), $mensagem);
