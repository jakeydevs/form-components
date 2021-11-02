<?php

namespace JakeyDevs\FormComponents\Components\Design;

use JakeyDevs\FormComponents\Components\Component;

class Help extends Component
{
    /** Variables */
    public $name;
    public $text;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $text)
    {
        $this->name = $name;
        $this->text = $text;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('form-components::Design.Forms.help');
    }
}
