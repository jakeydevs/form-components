<?php

return [

    /*
    |----------------------------------------------
    | Laravel view component name
    |----------------------------------------------
    |
    | Change this if you have view component conflicts
     */

    'name' => 'form-components',

    /*
    |----------------------------------------------
    | Styling
    |----------------------------------------------
    |
    | Define default and error styles for the systems. We do this for easier tweaking
    | and for PURGE to do its thing
     */

    'fieldset' => [
        'default' => 'space-y-2',
    ],

    'label' => [
        'default' => 'block font-medium text-gray-700',
        'error' => 'text-red-700',
    ],

    'help' => [
        'default' => 'mt-2 text-sm',
        'error' => 'text-red-700',
    ],

    'input' => [
        'default' => 'focus:ring-indigo-500 focus:border-indigo-500 block w-full border-2 border-gray-300 rounded-md',
        'error' => 'border-red-700',
    ],

    'upload' => [
        'default' => '',
        'error' => 'border-red-700',
    ],

    'textarea' => [
        'default' => 'block w-full focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border-2 border-gray-300 rounded-md',
        'error' => 'border-red-700',
    ],

    'Button' => [
        'default' => 'inline-flex items-center px-4 py-2 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500',
        'error' => '',
    ],

    'select' => [
        'default' => 'block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 rounded-md',
        'error' => '',
    ],

    'Multiple' => [
        'default' => 'block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 rounded-md',
        'error' => '',
    ],

];
