<?php

namespace App\View\Components\Backend;

use Illuminate\View\Component;

class SideBarLink extends Component
{
    public $label;

    public $link;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($label, $link)
    {
        $this->link = $link;
        $this->label = $label;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.backend.side-bar-link');
    }
}
