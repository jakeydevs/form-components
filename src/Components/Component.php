<?php

namespace JakeyDevs\FormComponents\Components;

use Illuminate\Support\Str;
use Illuminate\View\Component as BaseComponent;
use \Illuminate\Http\Request;

abstract class Component extends BaseComponent
{
    /** @var boolean */
    public $error = false;

    /**
     * Checks to see if we have a previous value
     *
     * @return string|iterable|object
     */
    public function getValue()
    {

        //-- Do we have a binding?
        $value = $this->attributes['value'] ?? null;
        if (isset($this->bind)) {
            $value = $this->bind->{$this->name};
        }

        //-- Checks for old data sent in session
        $value = old($this->name, $value);

        //-- Old doesn't like looking in input arrays...
        if (preg_match('/(.*?)\[(.*?)\]/', $this->name, $matches)) {
            $array_name = $matches[1];
            $key = $matches[2];
            $oldArray = old($array_name);
            $value = $oldArray[$key] ?? $value;
        }

        //-- Our type can force mutation to something we
        //-- can actually use!
        if ((isset($this->type)) && ($this->type == 'datetime-local')) {
            if ($value) {
                //-- Convert to correct format
                $d = \Carbon\Carbon::parse($value);
                $value = $d->format('Y-m-d\TH:i');
            }
        }

        //-- Give in - here it is
        return $value;
    }

    /**
     * Is this component required by the form
     *
     * @return bool
     */
    public function isRequired()
    {
        $required = false;
        if (isset($this->attributes['required'])) {
            $required = (bool) $this->attributes['required'];
        }

        return $required;
    }

    /**
     * Did this component trigger an error message?
     *
     * @return void
     */
    public function hasError()
    {
        $errors = request()->session()->get('errors');
        if (!is_null($errors)) {
            if ($errors->has($this->name)) {
                //-- Merge error classes into main
                return true;
            }
        }

        return false;
    }

    /**
     * Does this element have an error? If so, returns it for
     * display
     *
     * @return boolean|array
     */
    public function getErrors()
    {
        $list = [];
        $errors = request()->session()->get('errors');
        if (!is_null($errors)) {
            foreach ($errors->get($this->name) as $message) {
                //-- Get specific errors for this element
                $list[] = $message;
            }
        }

        return count($list) == 0 ? false : $list;
    }

    /**
     * Generate an unique ID for this component
     *
     * @return string
     */
    public function getId()
    {
        //-- Have we set this already?
        if (empty($this->id)) {
            $this->id = Str::slug($this->name . "-" . Str::random(5));
        }

        //-- Always has something
        return $this->id;
    }

}
