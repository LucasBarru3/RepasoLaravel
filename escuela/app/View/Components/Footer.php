<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Footer extends Component
{
    // Propiedad para almacenar el valor de chichilla
    public $chichilla;

    // Constructor para inicializar la propiedad
    public function __construct($chichilla = 'Contenido dinámico por defecto')
    {
        $this->chichilla = $chichilla;
    }

    // Método que indica la vista que se utilizará para el componente
    public function render()
    {
        return view('components.footer');
    }
}
