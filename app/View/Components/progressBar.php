<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class progressBar extends Component
{
    public $type;
    public $color;
    /**
     * Envoyer les message et le type via html
     * <x-badge-success :type="'warning'" :message="'Attention'">SeraRemplacéParMessage</x-badge-success>
     * :type="'warning'" sert à filtrer pour afficher en vert, rouge ou jaune
     * SeraRemplacéParMessage... sera remplacé par message
     */
    public function __construct($type)
    {
        $this->type = $type;

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.progress-bar');
    }
}
