<?php

namespace Alura\Cursos\Helper;

trait FlashMessageTrait
{
    public function defineMensagem(string $tipoMensagem, string $mensagem): void
    {
        $_SESSION['tipoMensagem'] = $tipoMensagem;
        $_SESSION['mensagem'] = $mensagem;
    }
}