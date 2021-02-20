<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AppLayout extends Component
{
    public $title;
    public $breadcrumbs;

    public function __construct($title = null, $breadcrumbs = null)
    {
        $this->title = $title;
        $this->breadcrumbs = $breadcrumbs;
    }

    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        $view = [
            'title' => $this->title,
            'breadcrumbs' => $this->breadcrumbs,
        ];
        return view('layouts.app', $view);
    }
}
