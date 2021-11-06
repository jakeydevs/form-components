<?php

namespace JakeyDevs\FormComponents\Components;

class Button extends Component
{
    /** Variables */
    public $name;
    public $type;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name = 'submit', $type = 'submit')
    {
        $this->name = $name;
        $this->type = $type;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('form-components::Buttons.button');
    }
}
