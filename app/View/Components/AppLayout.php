<?php

namespace app\View\Components;

use Illuminate\View\Component;

class AppLayout extends Component
{
  
    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        return view('components.layouts.app');
    }
}
