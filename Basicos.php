<?php

// Creamos una clase para Cola (Queue)
class Cola {
private $queue;

public function __construct() {
$this->queue = array();
}

public function enqueue($item) {
array_push($this->queue, $item);
}

public function dequeue() {
return array_shift($this->queue);
}
}

// Creamos una instancia de la clase Cola
$miCola = new Cola();

// Agregamos elementos a la cola
$miCola->enqueue(1);
$miCola->enqueue(10);

// Quitamos el primer elemento de la cola
$primerElemento = $miCola->dequeue();
echo $primerElemento . "\n";

// Creamos una clase para Pila (Stack)
class Pila {
private $stack;

public function __construct() {
$this->stack = array();
}

public function push($item) {
array_push($this->stack, $item);
}

public function pop() {
return array_pop($this->stack);
}
}

// Creamos una instancia de la clase Pila
$miPila = new Pila();

// Agregamos elementos a la pila
$miPila->push(1);
$miPila->push(10);

// Quitamos el último elemento de la pila
$ultimoElemento = $miPila->pop();
echo $ultimoElemento . "\n";

?>