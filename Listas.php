<?php

class Node {
    public $data;
    public $next;

    public function __construct($valor) {
        $this->data = $valor;
        $this->next = null;
    }
}

class List1 {
    public $head;
    public $size;

    public function __construct() {
        $this->head = null;
        $this->size = 0;
    }

    public function add($dato) {
        $node = new Node($dato);
        $current = $this->head;

        // Si nuestra lista está vacía
        if (!$current) {
            $this->head = $node;
            $this->size++;
            return $node;
        }

        // Si nuestra lista no está vacía
        while ($current->next) {
            $current = $current->next;
        }

        $current->next = $node;
        $this->size++;
        return $node;
    }

    public function getAll($buscando) {
        $current = $this->head;

        // Si nuestra lista está vacía o es igual a null.
        if (!$current) {
            echo "La lista está vacía";
            return "Error list empty";
        }

        // Si nuestra lista no está vacía
        while ($current) {
            echo $current->data . "\n"; // Imprime el dato
            $current = $current->next; // Actual o current es el nodo siguiente
        }
    }

    public function getItem($valorBuscado) {
        $current = $this->head; // Head actual

        // Si nuestra lista está vacía
        if (!$current) {
            echo "La lista está vacía";
            return "Error list empty";
        }

        while ($current) { // Iteramos la lista en base al current
            if ($current->data == $valorBuscado) { // Si es igual al valor del nodo
                echo "Ese dato sí se encuentra";
                return "Get Successfully";
            }
            $current = $current->next;
        }

        echo "Ese dato no se encuentra";
        return "Error value doesnt exist";
    }
}

$lista1 = new List1();
$lista1->add(15);
$lista1->add(123);
$lista1->add(100);
//echo var_dump($lista1);
//$lista1->getAll();
$lista1->getItem(100);

?>
