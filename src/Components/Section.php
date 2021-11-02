<?php

namespace JakeyDevs\FormComponents\Components;

class Section extends Component
{
    /** Variables */
    public $title;
    public $description;
    public $type;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $description = '', $type = 'two-col')
    {
        $this->title = $title;
        $this->description = $description;
        $this->type = $type;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('form-components::Design.Section.' . $this->type);
    }
}
