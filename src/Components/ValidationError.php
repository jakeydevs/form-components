<?php

namespace JakeyDevs\FormComponents\Components;

class ValidationError extends Component
{
    /** Variables */
    public $title;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title)
    {
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        $errors = request()->session()->get('errors');
        if (!is_null($errors)) {
            return view('form-components::Alerts.validation-error');
        }
    }
}
