<?php

namespace JakeyDevs\FormComponents;

use \Illuminate\Support\ServiceProvider;

class FormComponentsServiceProvider extends ServiceProvider
{

    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        //-- Set resource dir
        $this->loadViewsFrom(
            __DIR__ . '/Resources/',
            'form-components'
        );

        //-- Register view components
        $this->loadViewComponentsAs(config('form-components.name'), [

            //-- Design
            \JakeyDevs\FormComponents\Components\Section::class,
            \JakeyDevs\FormComponents\Components\Design\Label::class,
            \JakeyDevs\FormComponents\Components\Design\Help::class,

            //-- Inputs
            \JakeyDevs\FormComponents\Components\Input::class,
            \JakeyDevs\FormComponents\Components\Button::class,
            \JakeyDevs\FormComponents\Components\Select::class,
            \JakeyDevs\FormComponents\Components\SelectMultiple::class,
            \JakeyDevs\FormComponents\Components\Editor::class,
            \JakeyDevs\FormComponents\Components\Checkbox::class,

            //-- Alerts
            \JakeyDevs\FormComponents\Components\ValidationError::class,
            \JakeyDevs\FormComponents\Components\Success::class,
        ]);
    }

    /**
     * TBC
     *
     * @return void
     */
    public function register()
    {
        //-- Load config
        $this->mergeConfigFrom(
            __DIR__ . '/../config/config.php',
            'form-components'
        );
    }

}
