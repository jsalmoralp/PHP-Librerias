<?php
namespace phpLibrerias\main;

use phpLibrerias\mensajes\Mensajes;

class Main
{
    // instancio la "clase" Mensajes()
    public function mensajes() {
        return new Mensajes();
    }
    
}
