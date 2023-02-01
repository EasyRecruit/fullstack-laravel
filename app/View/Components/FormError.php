<?php

namespace App\View\Components;

use Illuminate\View\Component;

class FormError extends Component
{

    public function __construct(public $value)
    {
        //
    }

    public function render()
    {
        return view('components.form-error');
    }
}
