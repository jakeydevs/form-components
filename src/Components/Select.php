<?php

namespace JakeyDevs\FormComponents\Components;

class Select extends Component
{
    /** Variables */
    public $name;
    public $label;
    public $help;
    public $options;
    public $bind;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $options, $label = false, $help = '', $bind = null, $track = 'id', $display = 'text')
    {
        $this->name = $name;
        $this->label = $label;
        $this->help = $help;
        $this->bind = $bind;

        //-- Mutate options into something we can use
        if (gettype($options) == 'array') {
            $this->options = $options;
        } else {
            //-- If we are an object, we need to convert to an array
            foreach ($options as $opt) {
                $this->options[$opt->$track] = $opt->$display;
            }
        }

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('form-components::select');
    }
}
