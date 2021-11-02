<?php

namespace JakeyDevs\FormComponents\Components\Design;

use JakeyDevs\FormComponents\Components\Component;

class Label extends Component
{
    /** Variables */
    public $name;
    public $text;
    public $required;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $text, $required = false)
    {
        $this->text = $text;
        $this->name = $name;
        $this->required = $required;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('form-components::Design.Forms.label');
    }
}
