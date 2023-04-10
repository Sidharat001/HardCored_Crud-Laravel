<?php

namespace App\View\Components\UsersDetails;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class viewSingleDetails extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.users-details.view-single-details');
    }
}
