<?php

namespace App\View\Components;

use Illuminate\View\Component;

class student extends Component
{
    public $name;
    public $students;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $students)
    {
        $this->name = $name;
        $this->students = $students;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.student');
    }
}
