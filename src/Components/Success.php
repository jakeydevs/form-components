<?php

namespace JakeyDevs\FormComponents\Components;

class Success extends Component
{
    /** Variables */
    public $display;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($display)
    {
        $this->display = request()->session()->get($display);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        if (!is_null($this->display)) {
            return view('form-components::Alerts.success');
        }
    }
}
