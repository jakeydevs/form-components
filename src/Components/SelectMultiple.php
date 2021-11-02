<?php

namespace JakeyDevs\FormComponents\Components;

class SelectMultiple extends Component
{
    /** Variables */
    public $name;
    public $label;
    public $help;
    public $options;
    public $bind;
    public $track;

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
        $this->track = $track;

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
     * Are we selected?
     *
     * @return boolean
     */
    public function isSelected($option)
    {
        foreach ($this->getValue() as $value) {
            if ($value->{$this->track} == $option) {
                return true;
            }
        }

        return false;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('form-components::select-multiple');
    }
}
