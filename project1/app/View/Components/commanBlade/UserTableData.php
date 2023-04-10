<?php

namespace App\View\Components\commanBlade;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class UserTableData extends Component
{
    public $getAllDetails;
    /**
     * Create a new component instance.
     */
    public function __construct($getAllDetails)
    {
        $this->getAllDetails = $getAllDetails;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.comman-blade.user-table-data');
    }
}
