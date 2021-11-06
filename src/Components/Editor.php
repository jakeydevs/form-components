<?php

namespace JakeyDevs\FormComponents\Components;

class Editor extends Component
{
    /** Variables */
    public $name;
    public $label;
    public $help;
    public $bind;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $label = false, $help = '', $bind = null)
    {
        $this->name = $name;
        $this->label = $label;
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
        return view('form-components::editor');
    }
}
