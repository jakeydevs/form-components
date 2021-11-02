<?php

namespace JakeyDevs\FormComponents\Components;

class Input extends Component
{
    /** Variables */
    public $name;
    public $type;
    public $label;
    public $help;
    public $bind;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $type = 'text', $label = false, $help = '', $bind = null)
    {
        $this->name = $name;
        $this->type = $type;
        $this->label = $name;
        $this->help = $help;
        $this->bind = $bind;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('form-components::input');
    }
}
