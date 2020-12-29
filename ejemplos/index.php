<?php
include __DIR__ . "/../vendor/autoload.php";

use phpLibrerias\main\Main;
use phpLibrerias\mensajes\Mensajes;

/** INICIO
 * TESTS
 */

//// MAIN ////
// clase main desde se podra usar todo sin tener que hacer uso de otras clases especificamente
$main = new Main();
//** Hola Mundo con "echo" y el "return"
$main->mensajes()->m_echo($main->mensajes()->m_return("hola nundo desde main\n"));

//// Mensajes ////
// haciendo uso de la clase Mensajes() directamente
$mensajes = new Mensajes();
//** Hola Mundo con "echo" y el "return"
$mensajes->m_echo($mensajes->m_return("hola nundo desde mensajes\n"));

/** FINAL
 * TESTS
 */
