<?php

namespace App\Http\Controllers;

use App\Models\User;

abstract class Controller
{
    function main(){
        $animal = new Animal('carlos', 'perro');

        $animal->nombre;
    }
}

class Animal
{
    public $nombre;
    public $especie;

    public function __construct($nombre, $especie)
    {
        $this->nombre = $nombre;
        $this->especie = $especie;
    }

    public function describir()
    {
        return "Este es un {$this->especie} llamado {$this->nombre}.";
    }
}