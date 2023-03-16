<?php

class ArbolBinario {
    public $valor;
    public $izquierda;
    public $derecha;

    public function __construct($dato) {
        $this->valor = $dato;
        $this->izquierda = null;
        $this->derecha = null;
    }

    public function insertar($dato) {

        if ($dato > $this->valor) {
            if ($this->derecha != null) {
                $this->derecha->insertar($dato);
            } else {
                $this->derecha = new ArbolBinario($dato);
            }

        } else if ($dato < $this->valor) {
            if ($this->izquierda != null) {
                $this->izquierda->insertar($dato);
            } else {
                $this->izquierda = new ArbolBinario($dato);
            }
        }
    }

    public function tamanio() {
        
        if ($this->izquierda == null && $this->derecha == null) {
            return 1;
        } else if ($this->izquierda == null) {
            return 1 + $this->derecha->tamanio();
        } else if ($this->derecha == null) {
            return 1 + $this->izquierda->tamanio();
        } else {
            return 1 + $this->izquierda->tamanio() + $this->derecha->tamanio();
        }
    }
}

// Ejemplo de uso
$raiz = new ArbolBinario(5);
$raiz->insertar(3);
$raiz->insertar(7);
$raiz->insertar(2);
$raiz->insertar(4);
$raiz->insertar(6);
$raiz->insertar(8);

echo "El tamaño del árbol es: " . $raiz->tamanio(); // El tamaño del árbol es: 7
